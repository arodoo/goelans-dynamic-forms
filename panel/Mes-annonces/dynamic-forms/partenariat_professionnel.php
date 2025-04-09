<?php
// Formulaire pour le partenariat professionnel (option 3)
?>
<div class="form-section">
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="type_partenariat">Type de partenariat :</label>
    </div>
    <div class="col-md-8">
      <select id="type_partenariat" name="type_partenariat" class="form-control">
        <option value="Alliance" <?php echo (isset($type_partenariat) && $type_partenariat == 'Alliance') ? 'selected' : ''; ?>>Alliance</option>
        <option value="Coopération" <?php echo (isset($type_partenariat) && $type_partenariat == 'Coopération') ? 'selected' : ''; ?>>Coopération</option>
        <option value="Partenariat" <?php echo (isset($type_partenariat) && $type_partenariat == 'Partenariat') ? 'selected' : ''; ?>>Partenariat</option>
        <option value="Recherche d'associé" <?php echo (isset($type_partenariat) && $type_partenariat == "Recherche d'associé") ? 'selected' : ''; ?>>Recherche d'associé(s)</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="duree_partenariat">Durée souhaitée :</label>
    </div>
    <div class="col-md-3">
      <input type="text" id="duree_partenariat" name="duree_partenariat" class="form-control" value="<?php echo isset($duree_partenariat) ? $duree_partenariat : ''; ?>" />
    </div>
  </div>
</div>
