<?php
/**
 * Dynamic Form: Location Commerce
 * Form ID: 8
 * Description: Form for commercial space rental declarations
 */
?>

<div class="container dynamic-form" id="location-commerce-form" data-form-id="8">
  <form method="post" action="ajax-handler.php" enctype="multipart/form-data">
    <input type="hidden" name="form_id" value="8">

    <!-- Section 1: Activity Information -->
    <div class="card mb-4" id="activity-section">
      <div class="card-header bg-light">
        <h2 class="mb-0">Informations concernant l'activité en cours</h2>
      </div>
      <div class="card-body">
        <!-- Local vide, aménageable -->
        <div class="form-group row">
          <div class="col-sm-12 col-md-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" id="local_vide" name="local_vide" class="custom-control-input">
              <label class="custom-control-label" for="local_vide">Local vide, aménageable</label>
            </div>
          </div>
          
          <label for="nature_activite" class="col-sm-12 col-md-2 col-form-label">Nature de l'activité</label>
          <div class="col-sm-12 col-md-6">
            <select id="nature_activite" name="nature_activite" class="form-control">
              <option value="">-- sélectionnez --</option>
              <option value="Bureau">Bureau</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <!-- Section 2: Rental Information -->
    <div class="card mb-4" id="rental-section">
      <div class="card-header bg-light">
        <h2 class="mb-0">Informations concernant la location</h2>
      </div>
      <div class="card-body">
        <!-- Row 2: Loyer / Redevance and Periodicité -->
        <div class="form-group row">
          <label for="loyer_redevance" class="col-sm-12 col-md-3 col-form-label">Loyer (Hors charges et frais)</label>
          <div class="col-sm-12 col-md-3">
            <div class="input-group">
              <input type="number" id="loyer_redevance" name="loyer_redevance" class="form-control" min="0">
              <div class="input-group-append">
                <span class="input-group-text">€/mois</span>
              </div>
            </div>
          </div>

          <label for="periodicite" class="col-sm-12 col-md-2 col-form-label">Périodicité</label>
          <div class="col-sm-12 col-md-4">
            <select id="periodicite" name="periodicite" class="form-control">
              <option value="">-- sélectionnez --</option>
              <option value="Mensuel">Mensuel</option>
              <option value="Trimestriel">Trimestriel</option>
              <option value="Annuel">Annuel</option>
            </select>
          </div>
        </div>

        <!-- Row 3: Type de Bail / Contrat -->
        <div class="form-group row">
          <label for="type_bail" class="col-sm-12 col-md-3 col-form-label">Type de Bail / Contrat</label>
          <div class="col-sm-12 col-md-9">
            <select id="type_bail" name="type_bail" class="form-control">
              <option value="">-- sélectionnez --</option>
              <option value="Bail professionnel">Bail professionnel</option>
              <option value="Bail commercial">Bail commercial</option>
              <option value="Contrat de prestation de service ou coworking">Contrat de prestation de service ou coworking</option>
            </select>
          </div>
        </div>

        <!-- Row 4: Fixe and Dépôt de garantie -->
        <div class="form-group row">
          <label for="fixe" class="col-sm-12 col-md-3 col-form-label">Fixe</label>
          <div class="col-sm-12 col-md-3">
            <div class="input-group">
              <input type="number" id="fixe" name="fixe" class="form-control" min="0">
              <div class="input-group-append">
                <span class="input-group-text">€</span>
              </div>
            </div>
          </div>

          <label for="depot_garantie" class="col-sm-12 col-md-3 col-form-label">Dépôt de garantie</label>
          <div class="col-sm-12 col-md-3">
            <div class="input-group">
              <input type="number" id="depot_garantie" name="depot_garantie" class="form-control" min="0">
              <div class="input-group-append">
                <span class="input-group-text">mois</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Row 6: Superficie and État général -->
        <div class="form-group row">
          <label for="superficie" class="col-sm-12 col-md-3 col-form-label">Superficie</label>
          <div class="col-sm-12 col-md-3">
            <div class="input-group">
              <input type="number" id="superficie" name="superficie" class="form-control" min="0">
              <div class="input-group-append">
                <span class="input-group-text">m²</span>
              </div>
            </div>
          </div>

          <label for="etat_general" class="col-sm-12 col-md-3 col-form-label">État général</label>
          <div class="col-sm-12 col-md-3">
            <select id="etat_general" name="etat_general" class="form-control">
              <option value="">-- sélectionnez --</option>
              <option value="Neuf">Neuf</option>
              <option value="Rénové">Rénové</option>
              <option value="À rénover">À rénover</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <!-- Section 3: Additional Information -->
    <div class="card mb-4" id="additional-section">
      <div class="card-header bg-light">
        <h2 class="mb-0">Caractéristiques supplémentaires</h2>
      </div>
      <div class="card-body">
        <!-- Row 7: Stationnements -->
        <div class="form-group row">
          <label class="col-sm-12 col-md-3 col-form-label">Stationnements</label>
          <div class="col-sm-12 col-md-9">
            <div class="form-row row">
              <div class="col-md-4">
                <label for="nombre_stationnements">Nombre</label>
                <input type="number" id="nombre_stationnements" name="nombre_stationnements" class="form-control" min="0">
              </div>
              <div class="col-md-4">
                <div class="custom-control custom-checkbox mt-4">
                  <input type="checkbox" id="stationnement_possible" name="stationnement_possible" class="custom-control-input">
                  <label class="custom-control-label" for="stationnement_possible">Possible</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="custom-control custom-checkbox mt-4">
                  <input type="checkbox" id="stationnement_public" name="stationnement_public" class="custom-control-input">
                  <label class="custom-control-label" for="stationnement_public">Public</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Row 8: Accessibilité -->
        <div class="form-group row mt-4 mb-4">
          <label class="col-sm-12 col-md-3 col-form-label">Accessibilité</label>
          <div class="col-sm-12 col-md-9">
            <div class="custom-control custom-checkbox d-inline-block mr-4">
              <input type="checkbox" id="accessibilite_ascenseur" name="accessibilite[]" value="Ascenseur" class="custom-control-input">
              <label class="custom-control-label" for="accessibilite_ascenseur">Ascenseur</label>
            </div>
            <div class="custom-control custom-checkbox d-inline-block mr-4">
              <input type="checkbox" id="accessibilite_pmr" name="accessibilite[]" value="PMR" class="custom-control-input">
              <label class="custom-control-label" for="accessibilite_pmr">PMR</label>
            </div>
            <div class="custom-control custom-checkbox d-inline-block">
              <input type="checkbox" id="accessibilite_plein_pied" name="accessibilite[]" value="Plein pied" class="custom-control-input">
              <label class="custom-control-label" for="accessibilite_plein_pied">Plein pied</label>
            </div>
          </div>
        </div>

        <!-- Row 9: Commentaires -->
        <div class="form-group row">
          <label for="informations_complementaires" class="col-sm-12 col-md-3 col-form-label">Informations concernant l'activité en cours</label>
          <div class="col-sm-12 col-md-9">
            <textarea id="informations_complementaires" name="informations_complementaires" class="form-control" rows="4" placeholder="Veuillez saisir ici toutes informations complémentaires..."></textarea>
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

      // Check numeric fields
      const superficie = $('#superficie').val();
      if (superficie && parseInt(superficie) < 0) {
        alert('La superficie doit être un nombre positif.');
        valid = false;
      }

      const loyer = $('#loyer_redevance').val();
      if (loyer && parseInt(loyer) < 0) {
        alert('Le loyer doit être un nombre positif.');
        valid = false;
      }

      const fixe = $('#fixe').val();
      if (fixe && parseInt(fixe) < 0) {
        alert('Le montant fixe doit être un nombre positif.');
        valid = false;
      }

      const depot = $('#depot_garantie').val();
      if (depot && parseInt(depot) < 0) {
        alert('Le dépôt de garantie doit être un nombre positif.');
        valid = false;
      }

      if (!valid) {
        e.preventDefault();
      }
    });

    // Ensure textarea expands on focus
    $('#informations_complementaires').on('focus', function () {
      $(this).attr('rows', 6);
    }).on('blur', function () {
      if (!$(this).val().trim()) {
        $(this).attr('rows', 4);
      }
    });
  });
</script>