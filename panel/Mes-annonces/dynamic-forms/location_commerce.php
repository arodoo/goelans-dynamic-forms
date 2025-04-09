<?php
// Formulaire pour la location de commerce ou bureau (option 8)
?>
<div class="form-section">
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="baux_commerciaux">Type de bail :</label>
    </div>
    <div class="col-md-8 d-flex">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="baux_commerciaux[]" value="classiques" <?php echo (isset($baux_commerciaux) && in_array('classiques', $baux_commerciaux)) ? 'checked' : ''; ?>>
        <label class="form-check-label">Bail commercial classique</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="baux_commerciaux[]" value="derogatoires" <?php echo (isset($baux_commerciaux) && in_array('derogatoires', $baux_commerciaux)) ? 'checked' : ''; ?>>
        <label class="form-check-label">Bail commercial dérogatoire</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="baux_commerciaux[]" value="precaires" <?php echo (isset($baux_commerciaux) && in_array('precaires', $baux_commerciaux)) ? 'checked' : ''; ?>>
        <label class="form-check-label">Bail commercial précaire</label>
      </div>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="surface_commerce">Surface (m²) :</label>
    </div>
    <div class="col-md-3">
      <input type="number" id="surface_commerce" name="surface_commerce" class="form-control" value="<?php echo isset($surface_commerce) ? $surface_commerce : ''; ?>" />
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="baux_coworking">Coworking :</label>
    </div>
    <div class="col-md-8" style="text-align: left;">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="baux_coworking" value="oui" <?php echo (isset($baux_coworking) && $baux_coworking == 'oui') ? 'checked' : ''; ?>>
        <label class="form-check-label">Oui</label>
      </div>
    </div>
  </div>
</div>
