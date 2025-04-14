<?php
ob_start();
////INCLUDES CONFIGURATIONS CMS CODI ONE
require_once('../../../Configurations_bdd.php');
require_once('../../../Configurations.php');
require_once('../../../Configurations_modules.php');

////INCLUDE FUNCTION HAUT CMS CODI ONE
$dir_fonction = "../../";
require_once('../../../function/INCLUDE-FUNCTION-HAUT-CMS-CODI-ONE.php');

$lasturl = $_SERVER['HTTP_REFERER'];

// Get categories from database
$req_categories = $bdd->prepare("SELECT * FROM categories_metiers ORDER BY id ASC");
$req_categories->execute();
$categories = $req_categories->fetchAll(PDO::FETCH_ASSOC);
// Formulaire pour le recrutement (option 2)
?>
<!-- Include the shared styles -->
<link rel="stylesheet" href="/panel/Mes-annonces/dynamic-forms/css/styles.css?v=<?php echo time(); ?>">
<div class="form-section">
  <!-- Section 2.1 - Propuestas y Búsquedas -->
  <div class="row mb-4">
    <div class="col-12">
      <h4>Je propose / Je recherche</h4>
    </div>
    <div class="col-md-6">
      <div class="card p-3">
        <h5>JE PROPOSE</h5>
        <div class="form-check mt-2">
          <input class="form-check-input" type="checkbox" id="emploi" name="je_propose[]" value="emploi" <?php echo (isset($je_propose) && in_array('emploi', $je_propose)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="emploi">Un emploi</label>
        </div>
        <div class="form-check mt-2">
          <input class="form-check-input" type="checkbox" id="emploi_handicape" name="je_propose[]"
            value="emploi_handicape" <?php echo (isset($je_propose) && in_array('emploi_handicape', $je_propose)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="emploi_handicape">Un emploi de travailleur handicapé</label>
        </div>
        <div class="form-check mt-2">
          <input class="form-check-input" type="checkbox" id="woofing" name="je_propose[]" value="woofing" <?php echo (isset($je_propose) && in_array('woofing', $je_propose)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="woofing">Woofing</label>
        </div>
        <div class="form-check mt-2">
          <input class="form-check-input" type="checkbox" id="stage" name="je_propose[]" value="stage" <?php echo (isset($je_propose) && in_array('stage', $je_propose)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="stage">Un stage</label>
        </div>
        <div class="form-check mt-2">
          <input class="form-check-input" type="checkbox" id="job_etudiant" name="je_propose[]" value="job_etudiant"
            <?php echo (isset($je_propose) && in_array('job_etudiant', $je_propose)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="job_etudiant">Un job étudiant</label>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card p-3">
        <h5>JE RECHERCHE</h5>
        <div class="form-check mt-2">
          <input class="form-check-input" type="checkbox" id="prestataire" name="je_recherche[]"
            value="prestataire_occasionnel" <?php echo (isset($je_recherche) && in_array('prestataire_occasionnel', $je_recherche)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="prestataire">Un Prestataire occasionnel</label>
        </div>
        <div class="form-check mt-2">
          <input class="form-check-input" type="checkbox" id="specialiste" name="je_recherche[]" value="specialiste"
            <?php echo (isset($je_recherche) && in_array('specialiste', $je_recherche)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="specialiste">Un Spécialiste</label>
        </div>
        <div class="form-check mt-2">
          <input class="form-check-input" type="checkbox" id="sous_traitant" name="je_recherche[]" value="sous_traitant"
            <?php echo (isset($je_recherche) && in_array('sous_traitant', $je_recherche)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="sous_traitant">Un Sous-traitant</label>
        </div>
        <div class="form-check mt-2">
          <input class="form-check-input" type="checkbox" id="formateur" name="je_recherche[]" value="formateur" <?php echo (isset($je_recherche) && in_array('formateur', $je_recherche)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="formateur">Un formateur</label>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 2.2 - Listas Desplegables Basadas en FRANCE TRAVAIL -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="categorie_activite">Catégorie d'activité :</label>
    </div>
    <div class="col-md-9">
      <select id="categorie_activite" name="categorie_activite" class="form-control" onchange="loadMetiers(this.value)">
        <option value="">-- Sélectionner une catégorie --</option>
        <?php foreach ($categories as $categorie): ?>
          <option value="<?php echo $categorie['id']; ?>" <?php echo (isset($categorie_activite) && $categorie_activite == $categorie['id']) ? 'selected' : ''; ?>>
            <?php echo $categorie['id'] . '. ' . $categorie['nom_categorie']; ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="metier_propose">Métier proposé :</label>
    </div>
    <div class="col-md-9 dropdown-container">
      <select id="metier_propose" name="metier_propose" class="form-control">
        <option value="">-- Sélectionner un métier --</option>
        <!-- Les options seront chargées via AJAX -->
      </select>
      <div id="metier-loading">Chargement...</div>
    </div>
  </div>
</div>

<script>  // Fonction pour charger les métiers en fonction de la catégorie sélectionnée
  function loadMetiers(categorieId) {
    if (!categorieId) {
      document.getElementById('metier_propose').innerHTML = '<option value="">-- Sélectionner un métier --</option>';
      return;
    }

    // Show loading indicator
    const metierDropdown = document.getElementById('metier_propose');
    const loadingText = document.getElementById('metier-loading');
    
    metierDropdown.disabled = true;
    loadingText.style.display = "block";
    
    // Utiliser AJAX pour récupérer les métiers de la catégorie sélectionnée
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        // Update dropdown content
        metierDropdown.innerHTML = this.responseText;
        
    // Enable dropdown and hide loading indicator
        metierDropdown.disabled = false;
        loadingText.style.display = "none";
      }
    };
    xhr.open('GET', '../../../panel/Mes-annonces/dynamic-forms/ajax-handler.php?action=get_metiers&categorie_id=' + categorieId, true);
    xhr.send();
  }

  // Fonction pour auto-compléter les champs avec SIRET
  function autoFillFromSiret() {
    const siret = document.getElementById('siret').value;
    if (!siret) {
      alert('Veuillez entrer un numéro SIRET');
      return;
    }

    // Exemple de simulation d'appel API
    // En production, remplacer par un appel AJAX réel à une API
    alert('Recherche d\'informations pour le SIRET : ' + siret);
    // Ici, vous implémenteriez un appel AJAX à votre API
  }

  // Initialiser les fonctions au chargement
  document.addEventListener('DOMContentLoaded', function () {
    // Si la catégorie est déjà sélectionnée, mettre à jour les métiers
    if (document.getElementById('categorie_activite').value) {
      loadMetiers(document.getElementById('categorie_activite').value);
    }
  });
</script>