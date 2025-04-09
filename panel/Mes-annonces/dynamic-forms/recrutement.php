<?php
// Formulaire pour le recrutement (option 2)
?>
<div class="form-section">
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="type_contrat">Type de contrat :</label>
    </div>
    <div class="col-md-3">
      <select id="type_contrat" name="type_contrat" class="form-control">
        <option value="CDI" <?php echo (isset($type_contrat) && $type_contrat == 'CDI') ? 'selected' : ''; ?>>CDI</option>
        <option value="CDD" <?php echo (isset($type_contrat) && $type_contrat == 'CDD') ? 'selected' : ''; ?>>CDD</option>
        <option value="Stage" <?php echo (isset($type_contrat) && $type_contrat == 'Stage') ? 'selected' : ''; ?>>Stage</option>
        <option value="Alternance" <?php echo (isset($type_contrat) && $type_contrat == 'Alternance') ? 'selected' : ''; ?>>Alternance</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="experience_requise">Expérience requise :</label>
    </div>
    <div class="col-md-3">
      <input type="text" id="experience_requise" name="experience_requise" class="form-control" value="<?php echo isset($experience_requise) ? $experience_requise : ''; ?>" />
    </div>
  </div>
</div>
