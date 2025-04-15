<?php
// Formulaire pour la création d'activité (option 4)
?>
<div class="form-section">  <!-- Section 4.0 - Sélection du type de démarche -->
  <div class="row mb-4 pb-3" style="border-bottom: 1px solid #eeeded">
    <div class="col-12 mb-3">
      <h4>Création d'activité</h4>
      <p>Veuillez sélectionner l'option qui correspond à votre situation :</p>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="type_demarche" id="option_candidat" value="candidat" <?php echo (!isset($type_demarche) || $type_demarche == 'candidat') ? 'checked' : ''; ?>>
          <label class="form-check-label" for="option_candidat">
            Je suis candidat à l'aventure ou je souhaite créer mon activité
          </label>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="form-check mb-3">
          <input class="form-check-input" type="radio" name="type_demarche" id="option_projet" value="projet" <?php echo (isset($type_demarche) && $type_demarche == 'projet') ? 'checked' : ''; ?>>
          <label class="form-check-label" for="option_projet">
            Je soumets mon projet et fais appel aux mains tendues
          </label>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Section 4.1 - Description du Projet -->
  <div class="row mb-4 pb-3" style="border-bottom: 1px solid #eeeded">
    <div class="col-12 mb-3">
      <h5>Description de votre projet</h5>
    </div>
    <div class="col-md-12">
      <textarea id="description_projet" name="description_projet" class="form-control" rows="6" placeholder="Décrivez votre projet de création d'activité en détail..."><?php echo isset($description_projet) ? $description_projet : ''; ?></textarea>
    </div>
  </div>
  
  <!-- Section 4.2 - Integración con Datos Existentes -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="siret">Numéro SIRET (si existant) :</label>
    </div>
    <div class="col-md-6">
      <input type="text" id="siret" name="siret" class="form-control" placeholder="Entrez votre numéro SIRET" value="<?php echo isset($siret) ? $siret : ''; ?>">
    </div>
    <div class="col-md-3">
      <button type="button" class="btn btn-primary" onclick="autoFillFromSiret()">Auto-compléter</button>
    </div>
    <div class="col-md-12 mt-2">
      <small class="text-muted">Si vous disposez déjà d'un SIRET, entrez-le pour auto-compléter les informations.</small>
    </div>
  </div>
  
  <!-- Section 4.3 - Campos Multimedia -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="photos">Images ou diagrammes :</label>
    </div>
    <div class="col-md-9">
      <input type="file" id="photos" name="photos[]" class="form-control" multiple accept="image/*">
      <small class="text-muted">Formats acceptés: JPG, PNG, GIF. Maximum 5 images.</small>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="url">URL :</label>
    </div>
    <div class="col-md-9">
      <input type="url" id="url" name="url" class="form-control" placeholder="https://www.exemple.com" value="<?php echo isset($url) ? $url : ''; ?>">
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="commentaires">Commentaires additionnels :</label>
    </div>
    <div class="col-md-9">
      <textarea id="commentaires" name="commentaires" class="form-control" rows="4"><?php echo isset($commentaires) ? $commentaires : ''; ?></textarea>
    </div>
  </div>
  
  <!-- Section 4.4 - Selección del Formato de Publicación -->
  <div class="row mb-4">
    <div class="col-12 mb-3">
      <h4>Format de publication</h4>
    </div>
    <div class="col-md-4">
      <div class="card p-3 format-option">
        <input type="radio" name="format_publication" id="format_quart" value="quart" <?php echo (isset($format_publication) && $format_publication == 'quart') ? 'checked' : ''; ?>>
        <label for="format_quart">1/4 page</label>
        <div class="text-center">
          <img src="../assets/img/format_quart.png" alt="Format 1/4 page" class="img-fluid" style="max-height: 100px;">
        </div>
        <div class="text-center mt-2">
          <strong>5€ / mois</strong>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3 format-option">
        <input type="radio" name="format_publication" id="format_demi" value="demi" <?php echo (isset($format_publication) && $format_publication == 'demi') ? 'checked' : ''; ?>>
        <label for="format_demi">1/2 page</label>
        <div class="text-center">
          <img src="../assets/img/format_demi.png" alt="Format 1/2 page" class="img-fluid" style="max-height: 100px;">
        </div>
        <div class="text-center mt-2">
          <strong>10€ / mois</strong>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card p-3 format-option">
        <input type="radio" name="format_publication" id="format_pleine" value="pleine" <?php echo (isset($format_publication) && $format_publication == 'pleine') ? 'checked' : ''; ?>>
        <label for="format_pleine">1 page entière</label>
        <div class="text-center">
          <img src="../assets/img/format_pleine.png" alt="Format page entière" class="img-fluid" style="max-height: 100px;">
        </div>
        <div class="text-center mt-2">
          <strong>20€ / mois</strong>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
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
</script>
