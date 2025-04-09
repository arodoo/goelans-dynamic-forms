<?php
// Formulaire pour le développement de commune (option 1)
?>
<div class="form-section">
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="locaux_disponible">Locaux disponibles à partir de :</label>
    </div>
    <div class="col-md-3">
      <input type="date" id="locaux_disponible" name="locaux_disponible" class="form-control" value="<?php echo isset($locaux_disponible) ? $locaux_disponible : ''; ?>" />
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="surface_disponible">Surface disponible (m²) :</label>
    </div>
    <div class="col-md-3">
      <input type="number" id="surface_disponible" name="surface_disponible" class="form-control" value="<?php echo isset($surface_disponible) ? $surface_disponible : ''; ?>" />
    </div>
  </div>
</div>
