<?php
// Formulaire pour le recrutement (option 2)
?>
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
          <input class="form-check-input" type="checkbox" id="woofing" name="je_propose[]" value="emploi_woofing" <?php echo (isset($je_propose) && in_array('emploi_woofing', $je_propose)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="woofing">Un emploi Woofing</label>
        </div>
        <div class="form-check mt-2">
          <input class="form-check-input" type="checkbox" id="stage" name="je_propose[]" value="stage" <?php echo (isset($je_propose) && in_array('stage', $je_propose)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="stage">Un stage</label>
        </div>
        <div class="form-check mt-2">
          <input class="form-check-input" type="checkbox" id="prestataire" name="je_propose[]" value="prestataire_occasionnel" <?php echo (isset($je_propose) && in_array('prestataire_occasionnel', $je_propose)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="prestataire">Un Prestataire occasionnel</label>
        </div>
        <div class="form-check mt-2">
          <input class="form-check-input" type="checkbox" id="soustraitant" name="je_propose[]" value="sous_traitant" <?php echo (isset($je_propose) && in_array('sous_traitant', $je_propose)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="soustraitant">Un Sous-traitant</label>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card p-3">
        <h5>JE RECHERCHE</h5>
        <div class="form-check mt-2">
          <input class="form-check-input" type="checkbox" id="specialiste" name="je_recherche[]" value="specialiste" <?php echo (isset($je_recherche) && in_array('specialiste', $je_recherche)) ? 'checked' : ''; ?>>
          <label class="form-check-label" for="specialiste">Un Spécialiste</label>
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
      <label for="categorie_activite">Catégorie d'activité proposé :</label>
    </div>
    <div class="col-md-9">
      <select id="categorie_activite" name="categorie_activite" class="form-control" onchange="updateMetierOptions()">
        <option value="">-- Sélectionner une catégorie --</option>
        <option value="1" <?php echo (isset($categorie_activite) && $categorie_activite == '1') ? 'selected' : ''; ?>>1. Activité juridiques</option>
        <option value="2" <?php echo (isset($categorie_activite) && $categorie_activite == '2') ? 'selected' : ''; ?>>2. Comptabilité</option>
        <option value="3" <?php echo (isset($categorie_activite) && $categorie_activite == '3') ? 'selected' : ''; ?>>3. Agriculture, Sylviculture</option>
        <option value="4" <?php echo (isset($categorie_activite) && $categorie_activite == '4') ? 'selected' : ''; ?>>4. Elevage, Pêche</option>
        <option value="5" <?php echo (isset($categorie_activite) && $categorie_activite == '5') ? 'selected' : ''; ?>>5. Architecture</option>
        <option value="6" <?php echo (isset($categorie_activite) && $categorie_activite == '6') ? 'selected' : ''; ?>>6. Etudes des sols et des bâtiments</option>
        <option value="7" <?php echo (isset($categorie_activite) && $categorie_activite == '7') ? 'selected' : ''; ?>>7. Normes</option>
        <option value="8" <?php echo (isset($categorie_activite) && $categorie_activite == '8') ? 'selected' : ''; ?>>8. Artisanat d'art</option>
        <option value="9" <?php echo (isset($categorie_activite) && $categorie_activite == '9') ? 'selected' : ''; ?>>9. Audiovisuel</option>
        <option value="10" <?php echo (isset($categorie_activite) && $categorie_activite == '10') ? 'selected' : ''; ?>>10. Spectacle</option>
        <option value="11" <?php echo (isset($categorie_activite) && $categorie_activite == '11') ? 'selected' : ''; ?>>11. Automobile</option>
        <option value="12" <?php echo (isset($categorie_activite) && $categorie_activite == '12') ? 'selected' : ''; ?>>12. BTP</option>
        <option value="13" <?php echo (isset($categorie_activite) && $categorie_activite == '13') ? 'selected' : ''; ?>>13. Gros œuvre</option>
        <option value="14" <?php echo (isset($categorie_activite) && $categorie_activite == '14') ? 'selected' : ''; ?>>14. Commerce de détail</option>
        <option value="15" <?php echo (isset($categorie_activite) && $categorie_activite == '15') ? 'selected' : ''; ?>>15. Commerce de gros</option>
        <option value="16" <?php echo (isset($categorie_activite) && $categorie_activite == '16') ? 'selected' : ''; ?>>16. Grande distribution</option>
        <option value="17" <?php echo (isset($categorie_activite) && $categorie_activite == '17') ? 'selected' : ''; ?>>17. Communication et marketing</option>
        <option value="18" <?php echo (isset($categorie_activite) && $categorie_activite == '18') ? 'selected' : ''; ?>>18. Culture et patrimoine</option>
        <option value="19" <?php echo (isset($categorie_activite) && $categorie_activite == '19') ? 'selected' : ''; ?>>19. Edition</option>
        <option value="20" <?php echo (isset($categorie_activite) && $categorie_activite == '20') ? 'selected' : ''; ?>>20. Energie</option>
        <option value="21" <?php echo (isset($categorie_activite) && $categorie_activite == '21') ? 'selected' : ''; ?>>21. Conseil, orientation et formation</option>
        <option value="22" <?php echo (isset($categorie_activite) && $categorie_activite == '22') ? 'selected' : ''; ?>>22. Enseignement</option>
        <option value="23" <?php echo (isset($categorie_activite) && $categorie_activite == '23') ? 'selected' : ''; ?>>23. Environnement</option>
        <option value="24" <?php echo (isset($categorie_activite) && $categorie_activite == '24') ? 'selected' : ''; ?>>24. Assurance</option>
        <option value="25" <?php echo (isset($categorie_activite) && $categorie_activite == '25') ? 'selected' : ''; ?>>25. Banque</option>
        <option value="26" <?php echo (isset($categorie_activite) && $categorie_activite == '26') ? 'selected' : ''; ?>>26. Finance</option>
        <option value="27" <?php echo (isset($categorie_activite) && $categorie_activite == '27') ? 'selected' : ''; ?>>27. Gestion administrative</option>
        <option value="28" <?php echo (isset($categorie_activite) && $categorie_activite == '28') ? 'selected' : ''; ?>>28. Ressources humaines</option>
        <option value="29" <?php echo (isset($categorie_activite) && $categorie_activite == '29') ? 'selected' : ''; ?>>29. Hôtellerie</option>
        <option value="30" <?php echo (isset($categorie_activite) && $categorie_activite == '30') ? 'selected' : ''; ?>>30. Restauration</option>
        <option value="31" <?php echo (isset($categorie_activite) && $categorie_activite == '31') ? 'selected' : ''; ?>>31. Immobilier</option>
        <option value="32" <?php echo (isset($categorie_activite) && $categorie_activite == '32') ? 'selected' : ''; ?>>32. Industrie - Alimentaire</option>
        <option value="33" <?php echo (isset($categorie_activite) && $categorie_activite == '33') ? 'selected' : ''; ?>>33. Industrie - Bois</option>
        <option value="34" <?php echo (isset($categorie_activite) && $categorie_activite == '34') ? 'selected' : ''; ?>>34. Industrie - Chimie</option>
        <option value="35" <?php echo (isset($categorie_activite) && $categorie_activite == '35') ? 'selected' : ''; ?>>35. Industrie - Electronique</option>
        <option value="36" <?php echo (isset($categorie_activite) && $categorie_activite == '36') ? 'selected' : ''; ?>>36. Industrie - Métallurgie</option>
        <option value="37" <?php echo (isset($categorie_activite) && $categorie_activite == '37') ? 'selected' : ''; ?>>37. Imprimerie</option>
        <option value="38" <?php echo (isset($categorie_activite) && $categorie_activite == '38') ? 'selected' : ''; ?>>38. Papier</option>
        <option value="39" <?php echo (isset($categorie_activite) && $categorie_activite == '39') ? 'selected' : ''; ?>>39. Industrie - Textile et mode</option>
        <option value="40" <?php echo (isset($categorie_activite) && $categorie_activite == '40') ? 'selected' : ''; ?>>40. Industries</option>
        <option value="41" <?php echo (isset($categorie_activite) && $categorie_activite == '41') ? 'selected' : ''; ?>>41. Informatique</option>
        <option value="42" <?php echo (isset($categorie_activite) && $categorie_activite == '42') ? 'selected' : ''; ?>>42. Télécommunications</option>
        <option value="43" <?php echo (isset($categorie_activite) && $categorie_activite == '43') ? 'selected' : ''; ?>>43. Logistique et courrier</option>
        <option value="44" <?php echo (isset($categorie_activite) && $categorie_activite == '44') ? 'selected' : ''; ?>>44. Transport</option>
        <option value="45" <?php echo (isset($categorie_activite) && $categorie_activite == '45') ? 'selected' : ''; ?>>45. Maintenance</option>
        <option value="46" <?php echo (isset($categorie_activite) && $categorie_activite == '46') ? 'selected' : ''; ?>>46. Entretien</option>
        <option value="47" <?php echo (isset($categorie_activite) && $categorie_activite == '47') ? 'selected' : ''; ?>>47. Nettoyage</option>
        <option value="48" <?php echo (isset($categorie_activite) && $categorie_activite == '48') ? 'selected' : ''; ?>>48. Recherche</option>
        <option value="49" <?php echo (isset($categorie_activite) && $categorie_activite == '49') ? 'selected' : ''; ?>>49. Médicale</option>
        <option value="50" <?php echo (isset($categorie_activite) && $categorie_activite == '50') ? 'selected' : ''; ?>>50. Soins animalier</option>
        <option value="51" <?php echo (isset($categorie_activite) && $categorie_activite == '51') ? 'selected' : ''; ?>>51. Défense</option>
        <option value="52" <?php echo (isset($categorie_activite) && $categorie_activite == '52') ? 'selected' : ''; ?>>52. Sécurité</option>
        <option value="53" <?php echo (isset($categorie_activite) && $categorie_activite == '53') ? 'selected' : ''; ?>>53. Service public</option>
        <option value="54" <?php echo (isset($categorie_activite) && $categorie_activite == '54') ? 'selected' : ''; ?>>54. Sociale</option>
        <option value="55" <?php echo (isset($categorie_activite) && $categorie_activite == '55') ? 'selected' : ''; ?>>55. Sport, Animation et loisir</option>
        <option value="56" <?php echo (isset($categorie_activite) && $categorie_activite == '56') ? 'selected' : ''; ?>>56. Tourisme</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="metier_propose">Métier proposé :</label>
    </div>
    <div class="col-md-9">
      <select id="metier_propose" name="metier_propose" class="form-control">
        <option value="">-- Sélectionner un métier --</option>
        <!-- Les options seront remplies dynamiquement en fonction de la catégorie sélectionnée -->
      </select>
    </div>
  </div>
  
  <!-- Section 2.3 - Renseignements sur mon projet d'embauche -->
  <div class="row mb-4">
    <div class="col-12 mb-3">
      <h4>Renseignements sur mon projet d'embauche</h4>
    </div>
    <div class="col-md-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type_embauche" id="job_etudiant" value="job_etudiant" <?php echo (isset($type_embauche) && $type_embauche == 'job_etudiant') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="job_etudiant">Un job étudiant</label>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type_embauche" id="travailleur_handicape" value="travailleur_handicape" <?php echo (isset($type_embauche) && $type_embauche == 'travailleur_handicape') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="travailleur_handicape">Un emploi de travailleur handicapé</label>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type_embauche" id="perle_rare" value="perle_rare" <?php echo (isset($type_embauche) && $type_embauche == 'perle_rare') ? 'checked' : ''; ?> onclick="togglePerleRareOptions()">
        <label class="form-check-label" for="perle_rare">Je veux embaucher la perle rare !</label>
      </div>
    </div>
  </div>
  
  <div id="perle_rare_options" class="row mb-3 pb-3" style="border-bottom: 1px solid #eeeded; display: <?php echo (isset($type_embauche) && $type_embauche == 'perle_rare') ? 'flex' : 'none'; ?>">
    <div class="col-md-12">
      <label>Type de perle rare recherchée :</label>
    </div>
    <div class="col-md-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type_perle_rare" id="employe" value="employe" <?php echo (isset($type_perle_rare) && $type_perle_rare == 'employe') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="employe">Employé</label>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type_perle_rare" id="travailleur_handicape_pr" value="travailleur_handicape" <?php echo (isset($type_perle_rare) && $type_perle_rare == 'travailleur_handicape') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="travailleur_handicape_pr">Travailleur handicapé</label>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type_perle_rare" id="expert" value="expert" <?php echo (isset($type_perle_rare) && $type_perle_rare == 'expert') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="expert">Expert</label>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type_perle_rare" id="formateur_passionne" value="formateur_passionne" <?php echo (isset($type_perle_rare) && $type_perle_rare == 'formateur_passionne') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="formateur_passionne">Formateur passionné</label>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type_perle_rare" id="stagiaire" value="stagiaire" <?php echo (isset($type_perle_rare) && $type_perle_rare == 'stagiaire') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="stagiaire">Stagiaire</label>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type_perle_rare" id="woofer" value="woofer" <?php echo (isset($type_perle_rare) && $type_perle_rare == 'woofer') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="woofer">Woofer</label>
      </div>
    </div>
  </div>
  
  <!-- Section d'auto-remplissage SIRET -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="siret">Numéro SIRET :</label>
    </div>
    <div class="col-md-6">
      <input type="text" id="siret" name="siret" class="form-control" placeholder="Entrez votre numéro SIRET" value="<?php echo isset($siret) ? $siret : ''; ?>">
    </div>
    <div class="col-md-3">
      <button type="button" class="btn btn-primary" onclick="autoFillFromSiret()">Auto-compléter</button>
    </div>
    <div class="col-md-12 mt-2">
      <small class="text-muted">Incrémentation des informations saisies à l'inscription.</small>
    </div>
  </div>
  
  <!-- Section 2.4 - Éléments multimédias et format -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="photos">Photos :</label>
    </div>
    <div class="col-md-9">
      <input type="file" id="photos" name="photos[]" class="form-control" multiple accept="image/*">
      <small class="text-muted">Formats acceptés: JPG, PNG, GIF. Maximum 5 photos.</small>
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
      <label for="commentaires">Informations complémentaires :</label>
    </div>
    <div class="col-md-9">
      <textarea id="commentaires" name="commentaires" class="form-control" rows="4"><?php echo isset($commentaires) ? $commentaires : ''; ?></textarea>
    </div>
  </div>
  
  <!-- Sélection du format de publication -->
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
// Fonction pour mettre à jour les options de métiers en fonction de la catégorie
function updateMetierOptions() {
  const categorieSelect = document.getElementById('categorie_activite');
  const metierSelect = document.getElementById('metier_propose');
  const categorieValue = categorieSelect.value;
  
  // Vider les options actuelles
  metierSelect.innerHTML = '<option value="">-- Sélectionner un métier --</option>';
  
  if (!categorieValue) return;
  
  // Exemple pour la catégorie "Activité juridiques" (1)
  if (categorieValue === '1') {
    const metiers = [
      'Assistant de service juridique',
      'Clerc de notaire',
      'Délégué à la protection des données',
      'Data protection officer',
      'Huissier de justice',
      'Juge',
      'Juriste',
      'Mandataire judiciaire à la protection des majeurs',
      'Notaire',
      'Responsable des affaires règlementaires',
      'Responsable de service contentieux et recouvrement'
    ];
    
    metiers.forEach(metier => {
      const option = document.createElement('option');
      option.value = metier.toLowerCase().replace(/\s+/g, '_');
      option.textContent = metier;
      metierSelect.appendChild(option);
    });
  }
  
  // Ajouter d'autres catégories selon les besoins
  // ...
}

// Fonction pour afficher/cacher les options "perle rare"
function togglePerleRareOptions() {
  const perleRareOptions = document.getElementById('perle_rare_options');
  const perleRareRadio = document.getElementById('perle_rare');
  
  if (perleRareRadio.checked) {
    perleRareOptions.style.display = 'flex';
  } else {
    perleRareOptions.style.display = 'none';
  }
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
document.addEventListener('DOMContentLoaded', function() {
  // Si la catégorie est déjà sélectionnée, mettre à jour les métiers
  if (document.getElementById('categorie_activite').value) {
    updateMetierOptions();
  }
  
  // Vérifier l'état initial du bouton "perle rare"
  const perleRareRadio = document.getElementById('perle_rare');
  if (perleRareRadio.checked) {
    document.getElementById('perle_rare_options').style.display = 'flex';
  }
});
</script>
