<?php
// Formulaire pour la location de logement (option 7)
?>
<div class="form-section">
  <!-- Section 7.1 - Características del Alojamiento -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="type_logement">Type de logement :</label>
    </div>
    <div class="col-md-9">
      <select id="type_logement" name="type_logement" class="form-control">
        <option value="">-- Sélectionner --</option>
        <option value="appartement" <?php echo (isset($type_logement) && $type_logement == 'appartement') ? 'selected' : ''; ?>>Appartement</option>
        <option value="maison" <?php echo (isset($type_logement) && $type_logement == 'maison') ? 'selected' : ''; ?>>Maison</option>
        <option value="studio" <?php echo (isset($type_logement) && $type_logement == 'studio') ? 'selected' : ''; ?>>Studio</option>
        <option value="chambre" <?php echo (isset($type_logement) && $type_logement == 'chambre') ? 'selected' : ''; ?>>Chambre</option>
        <option value="mobile_home" <?php echo (isset($type_logement) && $type_logement == 'mobile_home') ? 'selected' : ''; ?>>Mobile home</option>
        <option value="chalet" <?php echo (isset($type_logement) && $type_logement == 'chalet') ? 'selected' : ''; ?>>Chalet</option>
        <option value="cabane" <?php echo (isset($type_logement) && $type_logement == 'cabane') ? 'selected' : ''; ?>>Cabane</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="disponibilite">Disponibilité :</label>
    </div>
    <div class="col-md-9">
      <select id="disponibilite" name="disponibilite" class="form-control">
        <option value="">-- Sélectionner --</option>
        <option value="saisonniere" <?php echo (isset($disponibilite) && $disponibilite == 'saisonniere') ? 'selected' : ''; ?>>Location saisonnière</option>
        <option value="annee" <?php echo (isset($disponibilite) && $disponibilite == 'annee') ? 'selected' : ''; ?>>Location à l'année</option>
        <option value="mois" <?php echo (isset($disponibilite) && $disponibilite == 'mois') ? 'selected' : ''; ?>>Location au mois</option>
        <option value="semaine" <?php echo (isset($disponibilite) && $disponibilite == 'semaine') ? 'selected' : ''; ?>>Location à la semaine</option>
        <option value="nuit" <?php echo (isset($disponibilite) && $disponibilite == 'nuit') ? 'selected' : ''; ?>>Location à la nuit</option>
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
      <label for="nb_pieces">Nombre de pièces :</label>
    </div>
    <div class="col-md-3">
      <input type="number" id="nb_pieces" name="nb_pieces" class="form-control" min="1" step="1" value="<?php echo isset($nb_pieces) ? $nb_pieces : ''; ?>">
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="nb_chambres">Nombre de chambres :</label>
    </div>
    <div class="col-md-3">
      <input type="number" id="nb_chambres" name="nb_chambres" class="form-control" min="0" step="1" value="<?php echo isset($nb_chambres) ? $nb_chambres : ''; ?>">
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="meuble">Meublé :</label>
    </div>
    <div class="col-md-9">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="meuble" id="meuble_oui" value="oui" <?php echo (isset($meuble) && $meuble == 'oui') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="meuble_oui">Oui</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="meuble" id="meuble_non" value="non" <?php echo (isset($meuble) && $meuble == 'non') ? 'checked' : ''; ?>>
        <label class="form-check-label" for="meuble_non">Non</label>
      </div>
    </div>
  </div>
  
  <!-- Section 7.2 - Detalles Financieros y Contractuales -->
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="loyer">Loyer mensuel :</label>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <input type="number" id="loyer" name="loyer" class="form-control" min="0" step="0.01" value="<?php echo isset($loyer) ? $loyer : ''; ?>">
        <div class="input-group-append">
          <span class="input-group-text">€</span>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="charges">Charges mensuelles :</label>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <input type="number" id="charges" name="charges" class="form-control" min="0" step="0.01" value="<?php echo isset($charges) ? $charges : ''; ?>">
        <div class="input-group-append">
          <span class="input-group-text">€</span>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="depot_garantie">Dépôt de garantie :</label>
    </div>
    <div class="col-md-3">
      <div class="input-group">
        <input type="number" id="depot_garantie" name="depot_garantie" class="form-control" min="0" step="0.01" value="<?php echo isset($depot_garantie) ? $depot_garantie : ''; ?>">
        <div class="input-group-append">
          <span class="input-group-text">€</span>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Section 7.3 - Elementos Multimedia -->
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
      <label for="commentaires">Informations complémentaires :</label>
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
