<?php
/**
 * Dynamic Form: Location Equipement
 * Form ID: 10
 * Description: Form for equipment rental declarations
 */
?>

<div class="container dynamic-form" id="location-equipement-form" data-form-id="10">
  <form method="post" action="ajax-handler.php" enctype="multipart/form-data">
    <input type="hidden" name="form_id" value="10">

    <div class="text-center mb-4">
      <h1>Je mets en location un outil, une machine</h1>
      <div class="text-right">
        <h4 class="text-primary">Case 13 sur Av Page4</h4>
      </div>
    </div>

    <!-- Section 1: Type d'équipement -->
    <div class="card mb-4" id="type-equipement-section">
      <div class="card-header bg-light">
        <h2 class="mb-0">Type d'équipement</h2>
      </div>
      <div class="card-body">
        <div class="form-group row">
          <div class="col-sm-12">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" id="materiel_production" name="materiel_production" class="custom-control-input">
              <label class="custom-control-label" for="materiel_production">Matériel de production</label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section 2: Informations concernant la location -->
    <div class="card mb-4" id="informations-location-section">
      <div class="card-header bg-light">
        <h2 class="mb-0">Informations concernant la location</h2>
      </div>
      <div class="card-body">
        <!-- Row 1: Type, Modèle, Etat général -->
        <div class="form-group row">
          <label for="type" class="col-sm-12 col-md-2 col-form-label">Type</label>
          <div class="col-sm-12 col-md-2">
            <input type="text" id="type" name="type" class="form-control">
          </div>

          <label for="modele" class="col-sm-12 col-md-2 col-form-label">Modèle</label>
          <div class="col-sm-12 col-md-2">
            <input type="text" id="modele" name="modele" class="form-control">
          </div>

          <label for="etat_general" class="col-sm-12 col-md-2 col-form-label">Etat général</label>
          <div class="col-sm-12 col-md-2">
            <input type="text" id="etat_general" name="etat_general" class="form-control">
          </div>
        </div>

        <!-- Row 2: Tarif -->
        <div class="form-group row">
          <label for="tarif" class="col-sm-12 col-md-2 col-form-label">Tarif</label>
          <div class="col-sm-12 col-md-10">
            <select id="tarif" name="tarif" class="form-control">
              <option value="">-- sélectionnez --</option>
              <option value="Journalier">Journalier</option>
              <option value="Hebdomadaire">Hebdomadaire</option>
              <option value="Mensuel">Mensuel</option>
            </select>
          </div>
        </div>

        <!-- Row 3: Durée de location -->
        <div class="form-group row">
          <label for="duree_location" class="col-sm-12 col-md-2 col-form-label">Durée de location</label>
          <div class="col-sm-12 col-md-10">
            <select id="duree_location" name="duree_location" class="form-control">
              <option value="">-- sélectionnez --</option>
              <option value="Journalier">Journalier</option>
              <option value="Semaine">Semaine</option>
              <option value="Mois">Mois</option>
            </select>
          </div>
        </div>

        <!-- Row 4: Type de Contrat -->
        <div class="form-group row">
          <label for="type_contrat" class="col-sm-12 col-md-2 col-form-label">Type de Contrat</label>
          <div class="col-sm-12 col-md-10">
            <select id="type_contrat" name="type_contrat" class="form-control">
              <option value="">-- sélectionnez --</option>
              <option value="Location simple">Location simple (courte durée)</option>
              <option value="Location longue durée">Location longue durée (LLD)</option>
              <option value="Location avec option d'achat">Location avec option d'achat (LOA)</option>
              <option value="Crédit-Bail">Crédit-Bail</option>
            </select>
          </div>
        </div>

        <!-- Row 5: Livraison -->
        <div class="form-group row">
          <label class="col-sm-12 col-md-2 col-form-label">Livraison</label>
          <div class="col-sm-12 col-md-10">
            <div class="custom-control custom-radio d-inline-block mr-4">
              <input type="radio" id="livraison_oui" name="livraison" value="OUI" class="custom-control-input">
              <label class="custom-control-label" for="livraison_oui">OUI</label>
            </div>
            <div class="custom-control custom-radio d-inline-block mr-4">
              <input type="radio" id="livraison_non" name="livraison" value="NON" class="custom-control-input">
              <label class="custom-control-label" for="livraison_non">NON</label>
            </div>
            <div class="custom-control custom-radio d-inline-block">
              <input type="radio" id="livraison_possible" name="livraison" value="POSSIBLE"
                class="custom-control-input">
              <label class="custom-control-label" for="livraison_possible">POSSIBLE</label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Additional information note -->
    <div class="text-right">
      <span class="text-primary">PAGE 10 PP</span>
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
        <img src="../assets/img/format_pleine.png" alt="Format page entière" class="img-fluid"
          style="max-height: 100px;">
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

      // Validate required fields
      const requiredFields = ['type', 'modele', 'tarif', 'type_contrat', 'duree_location'];
      requiredFields.forEach(function (fieldId) {
        if (!$('#' + fieldId).val()) {
          alert('Veuillez remplir le champ ' + $('label[for="' + fieldId + '"]').text());
          valid = false;
        }
      });

      // Validate livraison is selected
      if (!$('input[name="livraison"]:checked').val()) {
        alert('Veuillez indiquer si la livraison est possible.');
        valid = false;
      }

      if (!valid) {
        e.preventDefault();
      }
    });
  });
</script>