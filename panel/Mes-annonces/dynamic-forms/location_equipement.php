<?php
// Formulaire pour la location d'équipement (option 10)
?>
<div class="form-section">
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="type_equipement">Type d'équipement :</label>
    </div>
    <div class="col-md-8">
      <select id="type_equipement" name="type_equipement" class="form-control">
        <option value="Outil" <?php echo (isset($type_equipement) && $type_equipement == 'Outil') ? 'selected' : ''; ?>>Outil</option>
        <option value="Machine" <?php echo (isset($type_equipement) && $type_equipement == 'Machine') ? 'selected' : ''; ?>>Machine</option>
        <option value="Véhicule" <?php echo (isset($type_equipement) && $type_equipement == 'Véhicule') ? 'selected' : ''; ?>>Véhicule</option>
        <option value="Matériel informatique" <?php echo (isset($type_equipement) && $type_equipement == 'Matériel informatique') ? 'selected' : ''; ?>>Matériel informatique</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="disponibilite_equipement">Disponible à partir de :</label>
    </div>
    <div class="col-md-3">
      <input type="date" id="disponibilite_equipement" name="disponibilite_equipement" class="form-control" value="<?php echo isset($disponibilite_equipement) ? $disponibilite_equipement : ''; ?>" />
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="duree_location">Durée minimale de location :</label>
    </div>
    <div class="col-md-3">
      <input type="text" id="duree_location" name="duree_location" class="form-control" value="<?php echo isset($duree_location) ? $duree_location : ''; ?>" placeholder="Ex: 1 jour, 1 semaine, etc." />
    </div>
  </div>
</div>
