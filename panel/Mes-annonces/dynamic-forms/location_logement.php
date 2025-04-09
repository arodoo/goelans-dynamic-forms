<?php
// Formulaire pour la location de logement (option 7)
?>
<div class="form-section">
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="type_logement">Type de logement :</label>
    </div>
    <div class="col-md-8">
      <select id="type_logement" name="type_logement" class="form-control">
        <option value="Appartement" <?php echo (isset($type_logement) && $type_logement == 'Appartement') ? 'selected' : ''; ?>>Appartement</option>
        <option value="Maison" <?php echo (isset($type_logement) && $type_logement == 'Maison') ? 'selected' : ''; ?>>Maison</option>
        <option value="Studio" <?php echo (isset($type_logement) && $type_logement == 'Studio') ? 'selected' : ''; ?>>Studio</option>
        <option value="Loft" <?php echo (isset($type_logement) && $type_logement == 'Loft') ? 'selected' : ''; ?>>Loft</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="surface_logement">Surface (m²) :</label>
    </div>
    <div class="col-md-3">
      <input type="number" id="surface_logement" name="surface_logement" class="form-control" value="<?php echo isset($surface_logement) ? $surface_logement : ''; ?>" />
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="meuble">Meublé :</label>
    </div>
    <div class="col-md-8" style="text-align: left;">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="meuble" value="oui" <?php echo (isset($meuble) && $meuble == 'oui') ? 'checked' : ''; ?>>
        <label class="form-check-label">Oui</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="meuble" value="non" <?php echo (isset($meuble) && $meuble == 'non') ? 'checked' : ''; ?>>
        <label class="form-check-label">Non</label>
      </div>
    </div>
  </div>
</div>
