<?php
/**
 * Dynamic Form: Location Logement
 * Form ID: 7
 * Description: Form for housing rental declarations
 */
?>

<div class="container dynamic-form" id="location-logement-form" data-form-id="7">
  <form method="post" action="ajax-handler.php" enctype="multipart/form-data">
    <input type="hidden" name="form_id" value="7">

    <!-- Section 1: Localisation (Address Information) -->
    <div class="card mb-4" id="localisation-section">
      <div class="card-header bg-light">
        <h2 class="mb-0">Localisation</h2>
      </div>
      <div class="card-body">
        <!-- Row 1: Commune (Full Width) -->
        <div class="form-group row">
          <label for="commune" class="col-sm-12 col-md-3 col-form-label">Commune</label>
          <div class="col-sm-12 col-md-9">
            <input type="text" id="commune" name="commune" class="form-control">
          </div>
        </div>

        <!-- Row 2: Quartier, Num, Adresse (3 Columns) -->
        <div class="form-group row">
          <label for="quartier" class="col-sm-12 col-md-3 col-form-label">Quartier</label>
          <div class="col-sm-12 col-md-2">
            <input type="text" id="quartier" name="quartier" class="form-control">
          </div>

          <label for="n" class="col-sm-12 col-md-1 col-form-label">N</label>
          <div class="col-sm-12 col-md-1">
            <input type="text" id="n" name="n" class="form-control">
          </div>

          <label for="adresse" class="col-sm-12 col-md-2 col-form-label">Adresse</label>
          <div class="col-sm-12 col-md-3">
            <input type="text" id="adresse" name="adresse" class="form-control">
          </div>
        </div>
      </div>
    </div>

    <!-- Section 2: Housing Information -->
    <div class="card mb-4" id="logement-section">
      <div class="card-header bg-light">
        <h2 class="mb-0">Informations du logement</h2>
      </div>
      <div class="card-body">
        <!-- Row 3: Logement vide, Date disponibilité, Logement habité -->
        <div class="form-group row">
          <div class="col-sm-12 col-md-3">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" id="logement_vide" name="logement_vide" class="custom-control-input">
              <label class="custom-control-label" for="logement_vide">Logement vide</label>
            </div>
          </div>

          <label for="date_disponibilite" class="col-sm-12 col-md-3 col-form-label">Disponible à partir de</label>
          <div class="col-sm-12 col-md-2">
            <input type="text" id="date_disponibilite" name="date_disponibilite" class="form-control date-input"
              placeholder="jj/mm/aaaa">
          </div>

          <div class="col-sm-12 col-md-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" id="logement_habite" name="logement_habite" class="custom-control-input">
              <label class="custom-control-label" for="logement_habite">Logement habité à sous louer</label>
            </div>
          </div>
        </div>

        <!-- Row 4: Type de Bail / Contrat -->
        <div class="form-group row">
          <label for="type_bail" class="col-sm-12 col-md-3 col-form-label">Type de Bail / Contrat</label>
          <div class="col-sm-12 col-md-9">
            <select id="type_bail" name="type_bail" class="form-control">
              <option value="">-- sélectionnez --</option>
              <option value="Bail d'habitation vide">Bail d'habitation vide (3 ans renouvelable)</option>
              <option value="Bail meublé">Bail meublé (1 an renouvelable ou 9 mois pour étudiant)</option>
              <option value="Bail mobilité">Bail mobilité (1 à 10 mois)</option>
              <option value="Sous location">Sous location</option>
              <option value="Colocation">Colocation</option>
            </select>
          </div>
        </div>

        <!-- Row 5: Loyer (Hors charges) + Charges (2 Columns) -->
        <div class="form-group row">
          <label for="loyer_hors_charges" class="col-sm-12 col-md-3 col-form-label">Loyer (Hors charges et
            frais)</label>
          <div class="col-sm-12 col-md-3">
            <div class="input-group">
              <input type="number" id="loyer_hors_charges" name="loyer_hors_charges" class="form-control" min="0">
              <div class="input-group-append">
                <span class="input-group-text">€/mois</span>
              </div>
            </div>
          </div>

          <label for="charges" class="col-sm-12 col-md-3 col-form-label">Charges</label>
          <div class="col-sm-12 col-md-3">
            <div class="input-group">
              <input type="number" id="charges" name="charges" class="form-control" min="0">
              <div class="input-group-append">
                <span class="input-group-text">€/mois</span>
              </div>
            </div>
          </div>
        </div>
        <!-- Row 6: Loyer (CC), Dépôt de garantie (2 Columns) -->
        <div class="form-group row">
          <label for="loyer_charges_comprises" class="col-sm-12 col-md-3 col-form-label">Loyer (Charges
            comprises)</label>
          <div class="col-sm-12 col-md-3">
            <div class="input-group">
              <input type="number" id="loyer_charges_comprises" name="loyer_charges_comprises" class="form-control"
                min="0">
              <div class="input-group-append">
                <span class="input-group-text">€/mois</span>
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

        <!-- Row 7: Superficie (Full Width) -->
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
        </div>

        <!-- Row 7: État général -->
        <div class="form-group row">
          <label for="etat_general" class="col-sm-12 col-md-3 col-form-label">État général</label>
          <div class="col-sm-12 col-md-9">
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
        <!-- Row 8: Stationnements -->
        <div class="form-group row">
          <label class="col-sm-12 col-md-3 col-form-label">Stationnements</label>
          <div class="col-sm-12 col-md-9">
            <div class="form-row row">
              <div class="col-md-4">
                <label for="nombre_stationnements">Nombre</label>
                <input type="number" id="nombre_stationnements" name="nombre_stationnements" class="form-control"
                  min="0">
              </div>
              <div class="col-md-4">
                <label for="stationnement_possible">Possible</label>
                <input type="text" id="stationnement_possible" name="stationnement_possible" class="form-control">
              </div>
              <div class="col-md-4">
                <label for="stationnement_public">Public</label>
                <input type="text" id="stationnement_public" name="stationnement_public" class="form-control">
              </div>
            </div>
          </div>
        </div>

        <!-- Row 9: Accessibilité -->
        <div class="form-group row mt-4 mb-4">
          <label class="col-sm-12 col-md-3 col-form-label">Accessibilité</label>
          <div class="col-sm-12 col-md-9">
            <div class="custom-control custom-checkbox d-inline-block mr-4">
              <input type="checkbox" id="accessibilite_ascenseur" name="accessibilite[]" value="Ascenseur commun"
                class="custom-control-input">
              <label class="custom-control-label" for="accessibilite_ascenseur">Ascenseur commun</label>
            </div>
            <div class="custom-control custom-checkbox d-inline-block mr-4">
              <input type="checkbox" id="accessibilite_niveau_etage" name="accessibilite[]" value="Niveau étage"
                class="custom-control-input">
              <label class="custom-control-label" for="accessibilite_niveau_etage">Niveau étage</label>
            </div>
            <div class="custom-control custom-checkbox d-inline-block">
              <input type="checkbox" id="accessibilite_plain_pied" name="accessibilite[]" value="Plein pied"
                class="custom-control-input">
              <label class="custom-control-label" for="accessibilite_plain_pied">Plein pied</label>
            </div>
          </div>
        </div>

        <!-- Row 10: Commentaires -->
        <div class="form-group row">
          <label for="commentaires" class="col-sm-12 col-md-3 col-form-label">Commentaires</label>
          <div class="col-sm-12 col-md-9">
            <textarea id="commentaires" name="commentaires" class="form-control" rows="4"
              placeholder="Commentaires, précisions, ou conditions supplémentaires..."></textarea>
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
        <img src="../assets/img/format_pleine.png" alt="Format page entière" class="img-fluid"
          style="max-height: 100px;">
      </div>
      <div class="text-center mt-2">
        <strong>20€ / mois</strong>
      </div>
    </div>
  </div>
</div>
</div>


<script>
  // Form validation and dynamic behavior using jQuery
  $(document).ready(function () {

    // Date validation
    $('#date_disponibilite').on('blur', function () {
      const dateRegex = /^(\d{2})\/(\d{2})\/(\d{4})$/;
      if ($(this).val() && !dateRegex.test($(this).val())) {
        alert('Format de date invalide. Utilisez le format jj/mm/aaaa');
        $(this).val('');
      }
    });

    // Form validation before submit
    $('form').on('submit', function (e) {
      let valid = true;

      // Basic validation
      const commune = $('#commune').val().trim();
      if (!commune) {
        alert('Veuillez saisir la commune.');
        valid = false;
      }

      // Check numeric fields
      const superficie = $('#superficie').val();
      if (superficie && parseInt(superficie) < 0) {
        alert('La superficie doit être un nombre positif.');
        valid = false;
      }

      const loyerHc = $('#loyer_hors_charges').val();
      if (loyerHc && parseInt(loyerHc) < 0) {
        alert('Le loyer hors charges doit être un nombre positif.');
        valid = false;
      }

      const charges = $('#charges').val();
      if (charges && parseInt(charges) < 0) {
        alert('Les charges doivent être un nombre positif.');
        valid = false;
      }

      const loyerCc = $('#loyer_charges_comprises').val();
      if (loyerCc && parseInt(loyerCc) < 0) {
        alert('Le loyer charges comprises doit être un nombre positif.');
        valid = false;
      }

      // Auto-calculate loyer charges comprises
      if (loyerHc && charges && !loyerCc) {
        $('#loyer_charges_comprises').val(parseInt(loyerHc) + parseInt(charges));
      }

      if (!valid) {
        e.preventDefault();
      }
    });

    // Auto-calculate loyer charges comprises when either loyer hors charges or charges change
    $('#loyer_hors_charges, #charges').on('change', function () {
      const loyerHc = parseInt($('#loyer_hors_charges').val()) || 0;
      const charges = parseInt($('#charges').val()) || 0;

      if (loyerHc > 0 || charges > 0) {
        $('#loyer_charges_comprises').val(loyerHc + charges);
      }
    });

    // Ensure textarea expands on focus
    $('#commentaires').on('focus', function () {
      $(this).attr('rows', 6);
    }).on('blur', function () {
      if (!$(this).val().trim()) {
        $(this).attr('rows', 4);
      }
    });
  });
</script>