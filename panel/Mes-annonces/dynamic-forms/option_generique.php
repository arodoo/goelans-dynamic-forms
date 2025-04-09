<?php
// Formulaire pour option générique (option 9)
?>
<div class="form-section">
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="prise_en_charge">Options de prise en charge :</label>
    </div>
    <div class="col-md-8">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="prise_en_charge" value="1" <?php echo (isset($prise_en_charge) && $prise_en_charge == '1') ? 'checked' : ''; ?>>
        <label class="form-check-label">
          Je propose gracieusement un logement pour une période de 1 mois
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="prise_en_charge" value="2" <?php echo (isset($prise_en_charge) && $prise_en_charge == '2') ? 'checked' : ''; ?>>
        <label class="form-check-label">
          Je propose d'accueillir et de présenter la commune gracieusement
        </label>
      </div>
    </div>
  </div>
</div>
