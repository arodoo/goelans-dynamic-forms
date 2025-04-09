<?php
// Formulaire pour la vente/cession d'activité (option 5)
?>
<div class="form-section">
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="type_activite_vente">Type d'activité à céder :</label>
    </div>
    <div class="col-md-8">
      <select id="type_activite_vente" name="type_activite_vente" class="form-control">
        <option value="Menuiserie" <?php echo (isset($type_activite_vente) && $type_activite_vente == 'Menuiserie') ? 'selected' : ''; ?>>Menuiserie</option>
        <option value="Plomberie" <?php echo (isset($type_activite_vente) && $type_activite_vente == 'Plomberie') ? 'selected' : ''; ?>>Plomberie</option>
        <option value="Electricité" <?php echo (isset($type_activite_vente) && $type_activite_vente == 'Electricité') ? 'selected' : ''; ?>>Electricité</option>
        <option value="Maçonnerie" <?php echo (isset($type_activite_vente) && $type_activite_vente == 'Maçonnerie') ? 'selected' : ''; ?>>Maçonnerie</option>
        <option value="Peinture" <?php echo (isset($type_activite_vente) && $type_activite_vente == 'Peinture') ? 'selected' : ''; ?>>Peinture</option>
        <option value="Serrurerie" <?php echo (isset($type_activite_vente) && $type_activite_vente == 'Serrurerie') ? 'selected' : ''; ?>>Serrurerie</option>
      </select>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="activite_avec_murs">Vente avec les murs</label>
    </div>
    <div class="col-md-8" style="text-align: left;">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="activite_avec_murs" value="oui" <?php echo (isset($activite_avec_murs) && $activite_avec_murs == 'oui') ? 'checked' : ''; ?>>
        <label class="form-check-label">Oui</label>
      </div>
    </div>
  </div>
</div>
