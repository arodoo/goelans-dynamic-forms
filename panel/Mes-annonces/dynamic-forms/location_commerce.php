<?php
/**
 * Dynamic Form: Location Commerce
 * Form ID: 9
 * Description: Form for commercial rental declarations
 */
?>

<div class="container dynamic-form" id="location-commerce-form" data-form-id="9">
  <form method="post" action="ajax-handler.php" enctype="multipart/form-data">
    <input type="hidden" name="form_id" value="9">

    <!-- Section 1: Options contractuelles principales -->
    <div class="card mb-4" id="options-contractuelles-section">
      <div class="card-header bg-light">
        <h2 class="mb-0">Options contractuelles principales</h2>
      </div>
      <div class="card-body">
        <div class="form-group row">
          <div class="col-12">
            <div class="custom-control custom-checkbox d-inline-block mr-4">
              <input type="checkbox" id="option_location_gerance" name="option_location_gerance" class="custom-control-input">
              <label class="custom-control-label" for="option_location_gerance">Location-Gérance</label>
            </div>
            <div class="custom-control custom-checkbox d-inline-block mr-4">
              <input type="checkbox" id="option_location_achat" name="option_location_achat" class="custom-control-input">
              <label class="custom-control-label" for="option_location_achat">Location-Gérance avec option d'achat</label>
            </div>
            <div class="custom-control custom-checkbox d-inline-block">
              <input type="checkbox" id="option_sous_location_commerciale" name="option_sous_location_commerciale" class="custom-control-input">
              <label class="custom-control-label" for="option_sous_location_commerciale">Sous location Local commercial</label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section 2: Informations concernant l'activité en cours -->
    <div class="card mb-4" id="activite-section">
      <div class="card-header bg-light">
        <h2 class="mb-0">Informations concernant l'activité en cours</h2>
      </div>
      <div class="card-body">
        <!-- Row 1: Local vide -->
        <div class="form-group row">
          <div class="col-sm-12 col-md-3">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" id="local_vide" name="local_vide" class="custom-control-input">
              <label class="custom-control-label" for="local_vide">Local vide, aménageable</label>
            </div>
          </div>
        </div>

        <!-- Row 2: Nature de l'activité -->
        <div class="form-group row">
          <label for="nature_activite" class="col-sm-12 col-md-3 col-form-label">Nature de l'activité</label>
          <div class="col-sm-12 col-md-9">
            <select id="nature_activite" name="nature_activite" class="form-control">
              <option value="">-- sélectionnez --</option>
              <option value="Commerce">Commerce</option>
              <option value="Artisanat">Artisanat</option>
              <option value="Restauration">Restauration</option>
              <option value="Services">Services</option>
              <option value="Profession libérale">Profession libérale</option>
              <option value="Autres">Autres</option>
            </select>
          </div>
        </div>

        <!-- Row 3: Composition du fonds -->
        <div class="form-group row">
          <label for="composition_fonds" class="col-sm-12 col-md-3 col-form-label">Composition du fonds</label>
          <div class="col-sm-12 col-md-9">
            <select id="composition_fonds" name="composition_fonds" class="form-control">
              <option value="">-- sélectionnez --</option>
              <option value="Clientèle">Clientèle</option>
              <option value="Matériel">Matériel</option>
              <option value="Droit au bail">Droit au bail</option>
              <option value="Licence III, IV">Licence III, IV</option>
              <option value="Stocks">Stocks</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <!-- Section 3: Informations concernant la location -->
    <div class="card mb-4" id="location-section">
      <div class="card-header bg-light">
        <h2 class="mb-0">Informations concernant la location</h2>
      </div>
      <div class="card-body">
        <!-- Row 1: Loyer / Redevance & % du CA -->
        <div class="form-group row">
          <label for="loyer_redevance" class="col-sm-12 col-md-3 col-form-label">Loyer / Redevance</label>
          <div class="col-sm-12 col-md-3">
            <select id="loyer_redevance" name="loyer_redevance" class="form-control">
              <option value="">-- sélectionnez --</option>
              <option value="Mensuel">Mensuel</option>
              <option value="Trimestriel">Trimestriel</option>
              <option value="Annuel">Annuel</option>
            </select>
          </div>
          <label for="pourcentage_ca" class="col-sm-12 col-md-3 col-form-label">% du CA</label>
          <div class="col-sm-12 col-md-3">
            <input type="number" id="pourcentage_ca" name="pourcentage_ca" class="form-control" min="0" step="0.01">
          </div>
        </div>

        <!-- Row 2: TVA applicable -->
        <div class="form-group row">
          <label for="tva_applicable" class="col-sm-12 col-md-3 col-form-label">TVA applicable %</label>
          <div class="col-sm-12 col-md-9">
            <input type="number" id="tva_applicable" name="tva_applicable" class="form-control" min="0" step="0.01">
          </div>
        </div>

        <!-- Row 3: Type de Bail / Contrat -->
        <div class="form-group row">
          <label for="type_bail" class="col-sm-12 col-md-3 col-form-label">Type de Bail / Contrat</label>
          <div class="col-sm-12 col-md-9">
            <select id="type_bail" name="type_bail" class="form-control">
              <option value="">-- sélectionnez --</option>
              <option value="Bail commercial (classique) 3-6-9">Bail commercial (classique) 3-6-9</option>
              <option value="Bail précaire (ou dérogatoire)">Bail précaire (ou dérogatoire)</option>
              <option value="Bail professionnel">Bail professionnel</option>
              <option value="Location-Gérance">Location-Gérance</option>
              <option value="Sous-location commerciale">Sous-location commerciale</option>
              <option value="Convention d'occupation précaire">Convention d'occupation précaire</option>
            </select>
          </div>
        </div>

        <!-- Row 4: Durée du contrat -->
        <div class="form-group row">
          <label class="col-sm-12 col-md-3 col-form-label">Durée du contrat</label>
          <div class="col-sm-12 col-md-9">
            <div class="custom-control custom-radio d-inline-block mr-4">
              <input type="radio" id="duree_temporaire" name="duree_contrat" value="Temporaire" class="custom-control-input">
              <label class="custom-control-label" for="duree_temporaire">Temporaire</label>
            </div>
            <div class="custom-control custom-radio d-inline-block">
              <input type="radio" id="duree_renouvelable" name="duree_contrat" value="Renouvelable" class="custom-control-input">
              <label class="custom-control-label" for="duree_renouvelable">Renouvelable</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Format de publication -->
<div class="row mb-4">
  <div class="col-12 mb-3">
    <h4>Format de publication</h4>
  </div>
  <div class="col-md-4">
    <div class="card p-3 format-option">
      <input type="radio" name="format_publication" id="format_quart" value="quart" <?php echo (isset($format_publication) && $format_publication == 'quart') ? 'checked' : ''; ?>>
      <label for="format_quart">1/4 page</label>
      <div class="text-center">
        <img src="../assets/img/format_quart.png" alt="Format 1/4 page" class="img-fluid" style="max-height: 100px;">
      </div>
      <div class="text-center mt-2">
        <strong>5€ / mois</strong>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card p-3 format-option">
      <input type="radio" name="format_publication" id="format_demi" value="demi" <?php echo (isset($format_publication) && $format_publication == 'demi') ? 'checked' : ''; ?>>
      <label for="format_demi">1/2 page</label>
      <div class="text-center">
        <img src="../assets/img/format_demi.png" alt="Format 1/2 page" class="img-fluid" style="max-height: 100px;">
      </div>
      <div class="text-center mt-2">
        <strong>10€ / mois</strong>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card p-3 format-option">
      <input type="radio" name="format_publication" id="format_pleine" value="pleine" <?php echo (isset($format_publication) && $format_publication == 'pleine') ? 'checked' : ''; ?>>
      <label for="format_pleine">1 page entière</label>
      <div class="text-center">
        <img src="../assets/img/format_pleine.png" alt="Format page entière" class="img-fluid" style="max-height: 100px;">
      </div>
      <div class="text-center mt-2">
        <strong>20€ / mois</strong>
      </div>
    </div>
  </div>
</div>

<script>
  // Form validation and dynamic behavior using jQuery
  $(document).ready(function () {
    // Form validation before submit
    $('form').on('submit', function (e) {
      let valid = true;

      // Validate numeric fields
      const pourcentageCa = $('#pourcentage_ca').val();
      if (pourcentageCa && parseFloat(pourcentageCa) < 0) {
        alert('Le pourcentage du CA doit être un nombre positif.');
        valid = false;
      }

      const tvaApplicable = $('#tva_applicable').val();
      if (tvaApplicable && parseFloat(tvaApplicable) < 0) {
        alert('Le pourcentage de TVA doit être un nombre positif.');
        valid = false;
      }

      // Validate required dropdowns
      const requiredSelects = ['nature_activite', 'composition_fonds', 'loyer_redevance', 'type_bail'];
      requiredSelects.forEach(function(selectId) {
        if (!$('#' + selectId).val()) {
          alert('Veuillez sélectionner une valeur pour ' + $('label[for="' + selectId + '"]').text());
          valid = false;
        }
      });

      if (!valid) {
        e.preventDefault();
      }
    });

    // Ensure at least one option contractuelle is selected
    $('form').on('submit', function(e) {
      const optionsSelected = $('#option_location_gerance').is(':checked') || 
                            $('#option_location_achat').is(':checked') || 
                            $('#option_sous_location_commerciale').is(':checked');
      
      if (!optionsSelected) {
        alert('Veuillez sélectionner au moins une option contractuelle.');
        e.preventDefault();
      }
    });
  });
</script>
