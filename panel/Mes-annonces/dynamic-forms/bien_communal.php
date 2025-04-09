<?php
// Formulaire pour bien communal à vendre (option 6)
?>
<div class="form-section">
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="vente_biens_prives">Type de bien communal :</label>
    </div>
    <div class="col-md-8 d-flex">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="vente_biens_prives[]" value="batiments" <?php echo (isset($vente_biens_prives) && in_array('batiments', $vente_biens_prives)) ? 'checked' : ''; ?>>
        <label class="form-check-label">Bâtiments</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="vente_biens_prives[]" value="locaux" <?php echo (isset($vente_biens_prives) && in_array('locaux', $vente_biens_prives)) ? 'checked' : ''; ?>>
        <label class="form-check-label">Locaux</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="vente_biens_prives[]" value="avec_terrains" <?php echo (isset($vente_biens_prives) && in_array('avec_terrains', $vente_biens_prives)) ? 'checked' : ''; ?>>
        <label class="form-check-label">Avec terrains</label>
      </div>
    </div>
  </div>
  
  <div class="row mb-3 pb-3 align-items-center" style="border-bottom: 1px solid #eeeded">
    <div class="col-md-3">
      <label for="marche_gre_a_gre">Marché de gré à gré, appel à candidature</label>
    </div>
    <div class="col-md-8" style="text-align: left;">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="marche_gre_a_gre_appel_a_candidature" value="oui" <?php echo (isset($marche_gre_a_gre_appel_a_candidature) && $marche_gre_a_gre_appel_a_candidature == 'oui') ? 'checked' : ''; ?>>
        <label class="form-check-label">
          Oui
        </label>
      </div>
    </div>
  </div>
</div>
