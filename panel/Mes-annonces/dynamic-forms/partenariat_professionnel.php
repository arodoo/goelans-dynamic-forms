<?php
// Formulaire pour le partenariat professionnel (option 3)
?>
<div class="form-section">
  <!-- Section 3.1 - Sección de Propuestas de Colaboración -->
  <div class="row mb-4">
    <div class="col-12 mb-3">
      <h4>Je propose des solutions d'échanges professionnelles</h4>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type_collaboration" id="alliance" value="alliance" <?php echo (isset($type_collaboration) && $type_collaboration == 'alliance') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="alliance">Une alliance</label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type_collaboration" id="cooperation" value="cooperation" <?php echo (isset($type_collaboration) && $type_collaboration == 'cooperation') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="cooperation">Une coopération</label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type_collaboration" id="partenariat" value="partenariat" <?php echo (isset($type_collaboration) && $type_collaboration == 'partenariat') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="partenariat">Un partenariat</label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="type_collaboration" id="recherche_associe" value="recherche_associe" <?php echo (isset($type_collaboration) && $type_collaboration == 'recherche_associe') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="recherche_associe">Une recherche d'associé(s)</label>
      </div>
    </div>
  </div>
  
  <div class="row mb-4 pb-3" style="border-bottom: 1px solid #eeeded">
    <div class="col-12 mb-3">
      <h4>Je recherche</h4>
      <p>Je recherche un dirigeant de Filiale, un franchisé, un fournisseur, un prestataire, un sous-traitant.</p>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="recherche[]" id="dirigeant_filiale" value="dirigeant_filiale" <?php echo (isset($recherche) && in_array('dirigeant_filiale', $recherche)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="dirigeant_filiale">Dirigeant de Filiale</label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="recherche[]" id="franchise" value="franchise" <?php echo (isset($recherche) && in_array('franchise', $recherche)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="franchise">Franchisé</label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="recherche[]" id="fournisseur" value="fournisseur" <?php echo (isset($recherche) && in_array('fournisseur', $recherche)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="fournisseur">Fournisseur</label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="recherche[]" id="prestataire" value="prestataire" <?php echo (isset($recherche) && in_array('prestataire', $recherche)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="prestataire">Prestataire</label>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="recherche[]" id="sous_traitant" value="sous_traitant" <?php echo (isset($recherche) && in_array('sous_traitant', $recherche)) ? 'checked' : ''; ?>>
        <label class="form-check-label" for="sous_traitant">Sous-traitant</label>
      </div>
    </div>
  </div>
  
  <!-- Section 3.2 - Integración de Datos y Multimedia -->
  <!-- Auto-remplissage SIRET -->
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
  
  <!-- Champs pour éléments multimédias -->
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
