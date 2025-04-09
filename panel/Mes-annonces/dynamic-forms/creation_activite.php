<?php
// Formulaire pour la création d'activité (option 4)
?>
<div class="form-section">
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="type_projet">Type de projet :</label>
    </div>
    <div class="col-md-8">
      <select id="type_projet" name="type_projet" class="form-control">
        <option value="Creation" <?php echo (isset($type_projet) && $type_projet == 'Creation') ? 'selected' : ''; ?>>Création d'entreprise</option>
        <option value="Reprise" <?php echo (isset($type_projet) && $type_projet == 'Reprise') ? 'selected' : ''; ?>>Reprise d'activité</option>
        <option value="Expansion" <?php echo (isset($type_projet) && $type_projet == 'Expansion') ? 'selected' : ''; ?>>Expansion d'activité existante</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="date_demarrage">Date de démarrage prévue :</label>
    </div>
    <div class="col-md-3">
      <input type="date" id="date_demarrage" name="date_demarrage" class="form-control" value="<?php echo isset($date_demarrage) ? $date_demarrage : ''; ?>" />
    </div>
  </div>
</div>
