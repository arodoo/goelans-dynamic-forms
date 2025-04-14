<?php
// Formulaire pour la location de commerce (option 8)
?>
<div class="form-section">
  <!-- Section 8.1 - Características del Local Comercial -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="type_local">Type de local :</label>
    </div>
    <div class="col-md-9">
      <select id="type_local" name="type_local" class="form-control">
        <option value="">-- Sélectionner --</option>
        <option value="local_commercial" <?php echo (isset($type_local) && $type_local == 'local_commercial') ? 'selected' : ''; ?>>Local commercial</option>
        <option value="bureau" <?php echo (isset($type_local) && $type_local == 'bureau') ? 'selected' : ''; ?>>Bureau</option>
        <option value="entrepot" <?php echo (isset($type_local) && $type_local == 'entrepot') ? 'selected' : ''; ?>>Entrepôt</option>
        <option value="atelier" <?php echo (isset($type_local) && $type_local == 'atelier') ? 'selected' : ''; ?>>Atelier</option>
        <option value="fond_commerce" <?php echo (isset($type_local) && $type_local == 'fond_commerce') ? 'selected' : ''; ?>>Fond de commerce</option>
        <option value="local_mixte" <?php echo (isset($type_local) && $type_local == 'local_mixte') ? 'selected' : ''; ?>>Local mixte</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="superficie">Superficie (m²) :</label>
    </div>
    <div class="col-md-3">
      <input type="number" id="superficie" name="superficie" class="form-control" min="0" step="0.01" value="<?php echo isset($superficie) ? $superficie : ''; ?>">
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="situation">Situation :</label>
    </div>
    <div class="col-md-9">
      <select id="situation" name="situation" class="form-control">
        <option value="">-- Sélectionner --</option>
        <option value="centre_ville" <?php echo (isset($situation) && $situation == 'centre_ville') ? 'selected' : ''; ?>>Centre-ville</option>
        <option value="peripherie" <?php echo (isset($situation) && $situation == 'peripherie') ? 'selected' : ''; ?>>Périphérie</option>
        <option value="zone_commerciale" <?php echo (isset($situation) && $situation == 'zone_commerciale') ? 'selected' : ''; ?>>Zone commerciale</option>
        <option value="zone_artisanale" <?php echo (isset($situation) && $situation == 'zone_artisanale') ? 'selected' : ''; ?>>Zone artisanale</option>
        <option value="zone_industrielle" <?php echo (isset($situation) && $situation == 'zone_industrielle') ? 'selected' : ''; ?>>Zone industrielle</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="etat_general">État général :</label>
    </div>
    <div class="col-md-9">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="etat_general" id="etat_neuf" value="neuf" <?php echo (isset($etat_general) && $etat_general == 'neuf') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="etat_neuf">Neuf</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="etat_general" id="etat_bon" value="bon" <?php echo (isset($etat_general) && $etat_general == 'bon') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="etat_bon">Bon</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="etat_general" id="etat_renover" value="a_renover" <?php echo (isset($etat_general) && $etat_general == 'a_renover') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="etat_renover">À rénover</label>
      </div>
    </div>
  </div>
  
  <!-- Section 8.2 - Datos Comerciales y Financieros -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="type_bail">Type de bail :</label>
    </div>
    <div class="col-md-9">
      <select id="type_bail" name="type_bail" class="form-control">
        <option value="">-- Sélectionner --</option>
        <option value="commercial" <?php echo (isset($type_bail) && $type_bail == 'commercial') ? 'selected' : ''; ?>>Bail commercial</option>
        <option value="professionnel" <?php echo (isset($type_bail) && $type_bail == 'professionnel') ? 'selected' : ''; ?>>Bail professionnel</option>
        <option value="derogatoire" <?php echo (isset($type_bail) && $type_bail == 'derogatoire') ? 'selected' : ''; ?>>Bail dérogatoire</option>
        <option value="precaire" <?php echo (isset($type_bail) && $type_bail == 'precaire') ? 'selected' : ''; ?>>Convention d'occupation précaire</option>
        <option value="mixte" <?php echo (isset($type_bail) && $type_bail == 'mixte') ? 'selected' : ''; ?>>Bail mixte</option>
        <option value="habitation" <?php echo (isset($type_bail) && $type_bail == 'habitation') ? 'selected' : ''; ?>>Bail d'habitation</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="loyer_mensuel">Loyer mensuel HT :</label>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <input type="number" id="loyer_mensuel" name="loyer_mensuel" class="form-control" min="0" step="0.01" value="<?php echo isset($loyer_mensuel) ? $loyer_mensuel : ''; ?>">
        <div class="input-group-append">
          <span class="input-group-text">€</span>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="charges_mensuelles">Charges mensuelles HT :</label>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <input type="number" id="charges_mensuelles" name="charges_mensuelles" class="form-control" min="0" step="0.01" value="<?php echo isset($charges_mensuelles) ? $charges_mensuelles : ''; ?>">
        <div class="input-group-append">
          <span class="input-group-text">€</span>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="droit_entree">Droit d'entrée :</label>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <input type="number" id="droit_entree" name="droit_entree" class="form-control" min="0" step="0.01" value="<?php echo isset($droit_entree) ? $droit_entree : ''; ?>">
        <div class="input-group-append">
          <span class="input-group-text">€</span>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Section 8.3 - Integración Multimedia -->
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
      <label for="commentaires">Description additionnelle :</label>
    </div>
    <div class="col-md-9">
      <textarea id="commentaires" name="commentaires" class="form-control" rows="4"><?php echo isset($commentaires) ? $commentaires : ''; ?></textarea>
    </div>
  </div>
  
  <!-- Format de publication -->
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
