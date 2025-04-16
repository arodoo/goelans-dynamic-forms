<?php
/**
 * Dynamic Form: Vente Activité
 * Form ID: 5
 * Description: Form for business or property sale declarations
 */
?>

<div class="container dynamic-form" id="vente-activite-form" data-form-id="5">
    <form method="post" action="ajax-handler.php" enctype="multipart/form-data">
        <input type="hidden" name="form_id" value="5">
        
        <!-- Section 1: General Information (Header Fields) -->
        <div class="card mb-4" id="header-section">
            <div class="card-header bg-light">
                <h2 class="mb-0">Informations concernant l'activité en cours</h2>
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
                    
                    <label for="num" class="col-sm-12 col-md-1 col-form-label">Num</label>
                    <div class="col-sm-12 col-md-1">
                        <input type="text" id="num" name="num" class="form-control">
                    </div>
                    
                    <label for="adresse" class="col-sm-12 col-md-2 col-form-label">Adresse</label>
                    <div class="col-sm-12 col-md-3">
                        <input type="text" id="adresse" name="adresse" class="form-control">
                    </div>
                </div>
                
                <!-- Row 3: Locaux disponible (2 Columns) -->
                <div class="form-group row">
                    <label for="date_disponibilite" class="col-sm-12 col-md-3 col-form-label">Locaux disponible à partir de</label>
                    <div class="col-sm-12 col-md-4">
                        <input type="text" id="date_disponibilite" name="date_disponibilite" class="form-control date-input" placeholder="jj/mm/aaaa">
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <!-- Empty/Reserved column as specified -->
                    </div>
                </div>
                  <!-- Row 4: Statut juridique, Raison sociale, Enseigne (3 Columns) -->                <div class="form-group row">
                    <label for="statut_juridique" class="col-sm-12 col-md-3 col-form-label">Statut juridique</label>
                    <div class="col-sm-12 col-md-3">
                        <input type="text" id="statut_juridique" name="statut_juridique" class="form-control">
                    </div>
                    
                    <label for="raison_sociale" class="col-sm-12 col-md-3 col-form-label">Raison sociale</label>
                    <div class="col-sm-12 col-md-3">
                        <input type="text" id="raison_sociale" name="raison_sociale" class="form-control">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="enseigne" class="col-sm-12 col-md-3 col-form-label">Enseigne</label>
                    <div class="col-sm-12 col-md-9">
                        <input type="text" id="enseigne" name="enseigne" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section 2: Project Information -->
        <div class="card mb-4" id="project-section">
            <div class="card-header bg-light">
                <h2 class="mb-0">Informations du projet</h2>
            </div>
            <div class="card-body">
                <!-- Row 5: Modalité de transmission + Project Type -->
                <div class="form-group row">
                    <label class="col-sm-12 col-md-3 col-form-label">Modalité de transmission</label>
                    <div class="col-sm-12 col-md-5">
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="modalite_apport_actifs" name="modalite_transmission[]" value="Apport d'actifs" class="custom-control-input">
                            <label class="custom-control-label" for="modalite_apport_actifs">Apport d'actifs</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="modalite_apport_societe" name="modalite_transmission[]" value="Apport en société" class="custom-control-input">
                            <label class="custom-control-label" for="modalite_apport_societe">Apport en société</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="modalite_cession_fonds" name="modalite_transmission[]" value="Cession à un fonds d'investissement ou un partenaire stratégique" class="custom-control-input">
                            <label class="custom-control-label" for="modalite_cession_fonds">Cession à un fonds d'investissement ou un partenaire stratégique</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="modalite_cession_commerce" name="modalite_transmission[]" value="Cession de fonds de commerce" class="custom-control-input">
                            <label class="custom-control-label" for="modalite_cession_commerce">Cession de fonds de commerce</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="modalite_cession_licence" name="modalite_transmission[]" value="Cession de licence" class="custom-control-input">
                            <label class="custom-control-label" for="modalite_cession_licence">Cession de licence</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="modalite_cession_titres" name="modalite_transmission[]" value="Cession de titres" class="custom-control-input">
                            <label class="custom-control-label" for="modalite_cession_titres">Cession de titres</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="modalite_cession_progressive" name="modalite_transmission[]" value="Cession progressive" class="custom-control-input">
                            <label class="custom-control-label" for="modalite_cession_progressive">Cession progressive</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="modalite_fusion" name="modalite_transmission[]" value="Fusion - absorption" class="custom-control-input">
                            <label class="custom-control-label" for="modalite_fusion">Fusion - absorption</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="modalite_scission" name="modalite_transmission[]" value="Scission" class="custom-control-input">
                            <label class="custom-control-label" for="modalite_scission">Scission</label>
                        </div>
                    </div>
                    
                    <label class="col-sm-12 col-md-1 col-form-label">Type</label>
                    <div class="col-sm-12 col-md-3">
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="type_artisan" name="type_projet[]" value="Artisan" class="custom-control-input">
                            <label class="custom-control-label" for="type_artisan">Artisan</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="type_association" name="type_projet[]" value="Association" class="custom-control-input">
                            <label class="custom-control-label" for="type_association">Association</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="type_commerce" name="type_projet[]" value="Commerce" class="custom-control-input">
                            <label class="custom-control-label" for="type_commerce">Commerce</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="type_bureau" name="type_projet[]" value="Bureau" class="custom-control-input">
                            <label class="custom-control-label" for="type_bureau">Bureau</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="type_entreprise" name="type_projet[]" value="Entreprise" class="custom-control-input">
                            <label class="custom-control-label" for="type_entreprise">Entreprise</label>
                        </div>
                    </div>
                </div>
                
                <!-- Row 6: Nature de l'activité -->
                <div class="form-group row">
                    <label for="nature_activite" class="col-sm-12 col-md-3 col-form-label">Nature de l'activité</label>
                    <div class="col-sm-12 col-md-9">
                        <select id="nature_activite" name="nature_activite" class="form-control">
                            <option value="">-- sélectionnez --</option>
                            <option value="Local vide / aménageable">Local vide / aménageable</option>
                            <option value="En activité">En activité</option>
                            <option value="Autres">Autres</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section 3: Technical Information -->
        <div class="card mb-4" id="technical-section">
            <div class="card-header bg-light">
                <h2 class="mb-0">Informations techniques</h2>
            </div>
            <div class="card-body">
                <!-- Row 7: Superficie + État général -->
                <div class="form-group row">
                    <label for="superficie" class="col-sm-12 col-md-3 col-form-label">Superficie (m²)</label>
                    <div class="col-sm-12 col-md-3">
                        <input type="number" id="superficie" name="superficie" class="form-control" min="0">
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
                
                <!-- Row 8: Licences et autorisations -->
                <div class="form-group row">
                    <label for="licences_autorisations" class="col-sm-12 col-md-3 col-form-label">Licences et autorisations nécessaires pour l'exploitation</label>
                    <div class="col-sm-12 col-md-9">
                        <textarea id="licences_autorisations" name="licences_autorisations" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                  <!-- Row 9: Cession de propriété intellectuelle -->
                <div class="form-group row">
                    <label class="col-sm-12 col-md-3 col-form-label">Cession de propriété intellectuelle</label>
                    <div class="col-sm-12 col-md-9">
                        <div class="custom-control custom-checkbox d-inline-block mr-4">
                            <input type="checkbox" id="prop_marque" name="propriete_intellectuelle[]" value="Marque" class="custom-control-input">
                            <label class="custom-control-label" for="prop_marque">Marque</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline-block mr-4">
                            <input type="checkbox" id="prop_brevet" name="propriete_intellectuelle[]" value="Brevet" class="custom-control-input">
                            <label class="custom-control-label" for="prop_brevet">Brevet</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline-block">
                            <input type="checkbox" id="prop_nom_domaine" name="propriete_intellectuelle[]" value="Nom de domaine" class="custom-control-input">
                            <label class="custom-control-label" for="prop_nom_domaine">Nom de domaine</label>
                        </div>
                    </div>
                </div>
                
                <!-- Row 10: Staff Details -->
                <div class="form-group row">
                    <label class="col-sm-12 col-md-3 col-form-label">Effectif</label>
                    <div class="col-sm-12 col-md-9">
                        <div class="custom-control custom-checkbox d-inline-block mr-4">
                            <input type="checkbox" id="effectif_cdi" name="effectif[]" value="CDI" class="custom-control-input">
                            <label class="custom-control-label" for="effectif_cdi">Effectif en CDI</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline-block mr-4">
                            <input type="checkbox" id="effectif_cdd" name="effectif[]" value="CDD" class="custom-control-input">
                            <label class="custom-control-label" for="effectif_cdd">Effectif en CDD</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline-block">
                            <input type="checkbox" id="effectif_interim" name="effectif[]" value="Interim" class="custom-control-input">
                            <label class="custom-control-label" for="effectif_interim">Effectif en intérim</label>
                        </div>
                    </div>
                </div>
                
                <!-- Row 10b: Staff Numbers (appears if options selected) -->
                <div class="form-group row" id="details_effectif_row">
                    <div class="col-sm-12 offset-md-3 col-md-9">
                        <div class="form-row">
                            <div class="col-md-4 mb-2">
                                <input type="number" id="nombre_cdi" name="nombre_cdi" class="form-control" min="0" placeholder="Nombre CDI">
                            </div>
                            <div class="col-md-4 mb-2">
                                <input type="number" id="nombre_cdd" name="nombre_cdd" class="form-control" min="0" placeholder="Nombre CDD">
                            </div>
                            <div class="col-md-4 mb-2">
                                <input type="number" id="nombre_interim" name="nombre_interim" class="form-control" min="0" placeholder="Nombre intérim">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Row 11: Parking Information -->
                <div class="form-group row">
                    <label class="col-sm-12 col-md-3 col-form-label">Stationnements</label>
                    <div class="col-sm-12 col-md-9">
                        <div class="form-row row">
                            <div class="col-md-3">
                                <label for="nombre_stationnements">Nombre</label>
                                <input type="text" id="nombre_stationnements" name="nombre_stationnements" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="stationnement_possible">Possible</label>
                                <input type="text" id="stationnement_possible" name="stationnement_possible" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="stationnement_public">Public</label>
                                <input type="text" id="stationnement_public" name="stationnement_public" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Row 12: Accessibility -->
                <div class="form-group row">
                    <label class="col-sm-12 col-md-3 col-form-label">Accessibilité</label>
                    <div class="col-sm-12 col-md-9">
                        <div class="custom-control custom-checkbox d-inline-block mr-4">
                            <input type="checkbox" id="accessibilite_ascenseur" name="accessibilite[]" value="Ascenseur commun" class="custom-control-input">
                            <label class="custom-control-label" for="accessibilite_ascenseur">Ascenseur commun</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline-block mr-4">
                            <input type="checkbox" id="accessibilite_pmr" name="accessibilite[]" value="PMR" class="custom-control-input">
                            <label class="custom-control-label" for="accessibilite_pmr">PMR</label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline-block">
                            <input type="checkbox" id="accessibilite_plain_pied" name="accessibilite[]" value="Plein pied" class="custom-control-input">
                            <label class="custom-control-label" for="accessibilite_plain_pied">Plein pied</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
// Form validation and dynamic behavior using jQuery
$(document).ready(function() {
    
    // Date validation
    $('#date_disponibilite').on('blur', function() {
        const dateRegex = /^(\d{2})\/(\d{2})\/(\d{4})$/;
        if ($(this).val() && !dateRegex.test($(this).val())) {
            alert('Format de date invalide. Utilisez le format jj/mm/aaaa');
            $(this).val('');
        }
    });
    
    // Form validation before submit
    $('form').on('submit', function(e) {
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
        
        if (!valid) {
            e.preventDefault();
        }
    });
      // Hide the detail rows initially
    $('#details_effectif_row').hide();
    $('#details_propriete_row').hide();
    
    // Toggle visibility of staff number inputs
    $('#effectif_cdi, #effectif_cdd, #effectif_interim').on('change', function() {
        const anyChecked = $('#effectif_cdi').prop('checked') || 
                           $('#effectif_cdd').prop('checked') || 
                           $('#effectif_interim').prop('checked');
        
        if (anyChecked) {
            $('#details_effectif_row').show();
        } else {
            $('#details_effectif_row').hide();
        }
        
        // Show/hide individual input fields
        $('#nombre_cdi').toggle($('#effectif_cdi').prop('checked'));
        $('#nombre_cdd').toggle($('#effectif_cdd').prop('checked'));
        $('#nombre_interim').toggle($('#effectif_interim').prop('checked'));
    });
    
    // Toggle visibility of propriété intellectuelle detail inputs
    $('#prop_marque, #prop_brevet, #prop_nom_domaine').on('change', function() {
        const anyChecked = $('#prop_marque').prop('checked') || 
                           $('#prop_brevet').prop('checked') || 
                           $('#prop_nom_domaine').prop('checked');
        
        if (anyChecked) {
            $('#details_propriete_row').show();
        } else {
            $('#details_propriete_row').hide();
        }
        
        // Show/hide individual input fields
        $('#details_marque').toggle($('#prop_marque').prop('checked'));
        $('#details_brevet').toggle($('#prop_brevet').prop('checked'));
        $('#details_nom_domaine').toggle($('#prop_nom_domaine').prop('checked'));
    });
});
</script>
