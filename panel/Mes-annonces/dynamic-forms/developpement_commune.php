<?php
/**
 * Dynamic Form: Développement Commune
 * Form ID: 1
 * Description: Form for local or professional initiative declaration
 */
?>

<div class="container dynamic-form" id="developpement-commune-form" data-form-id="1">
    <form method="post" action="ajax-handler.php" enctype="multipart/form-data">
        <input type="hidden" name="form_id" value="1">
        
        <!-- Section 1: General Information (Header Fields) -->
        <div class="card mb-4" id="header-section">
            <div class="card-header bg-light">
                <h2 class="mb-0">Informations générales</h2>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="objet" class="col-sm-12 col-md-3 col-form-label">Objet</label>
                    <div class="col-sm-12 col-md-9">
                        <textarea id="objet" name="objet" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                
                <div class="alert alert-info mb-3">
                    <p class="mb-0">Je veux faire rayonner, développer ma commune, mon entreprise, mon projet</p>
                </div>
                
                <div class="form-group row">
                    <label for="date_disponibilite" class="col-sm-12 col-md-3 col-form-label">Locaux disponible à partir de</label>
                    <div class="col-sm-12 col-md-9">
                        <input type="text" id="date_disponibilite" name="date_disponibilite" class="form-control date-input" placeholder="jj/mm/aaaa">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="raison_sociale" class="col-sm-12 col-md-3 col-form-label">Raison sociale</label>
                    <div class="col-sm-12 col-md-9">
                        <input type="text" id="raison_sociale" name="raison_sociale" class="form-control">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="statut_juridique" class="col-sm-12 col-md-3 col-form-label">Statut juridique</label>
                    <div class="col-sm-12 col-md-9">
                        <select id="statut_juridique" name="statut_juridique" class="form-control">
                            <option value="">Sélectionnez...</option>
                            <option value="SARL">SARL</option>
                            <option value="SA">SA</option>
                            <option value="SAS">SAS</option>
                            <option value="SASU">SASU</option>
                            <option value="EURL">EURL</option>
                            <option value="EI">EI</option>
                            <option value="Association">Association</option>
                            <option value="Autre">Autre</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="commune" class="col-sm-12 col-md-3 col-form-label">Commune</label>
                    <div class="col-sm-12 col-md-9">
                        <input type="text" id="commune" name="commune" class="form-control">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="adresse" class="col-sm-12 col-md-3 col-form-label">N° adresse / Quartier</label>
                    <div class="col-sm-12 col-md-9">
                        <input type="text" id="adresse" name="adresse" class="form-control">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="enseigne" class="col-sm-12 col-md-3 col-form-label">Enseigne</label>
                    <div class="col-sm-12 col-md-9">
                        <input type="text" id="enseigne" name="enseigne" class="form-control">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="siret" class="col-sm-12 col-md-3 col-form-label">SIRET (facultatif)</label>
                    <div class="col-sm-12 col-md-9">
                        <input type="text" id="siret" name="siret" class="form-control">
                        <small class="form-text text-muted">Incrémentation des informations saisies à l'inscription. Si SIRET (toutes infos enregistrées en API)</small>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section 2: Type of Project -->
        <div class="card mb-4" id="project-type-section">
            <div class="card-header bg-light">
                <h2 class="mb-0">Nature du projet</h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="type_commune" name="nature_projet" value="COMMUNE" class="custom-control-input" required>
                        <label class="custom-control-label" for="type_commune">COMMUNE</label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="type_entreprise" name="nature_projet" value="ENTREPRISE / COMMERCE" class="custom-control-input">
                        <label class="custom-control-label" for="type_entreprise">ENTREPRISE / COMMERCE</label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="type_artisan" name="nature_projet" value="ARTISAN" class="custom-control-input">
                        <label class="custom-control-label" for="type_artisan">ARTISAN</label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="type_association" name="nature_projet" value="ASSOCIATION" class="custom-control-input">
                        <label class="custom-control-label" for="type_association">ASSOCIATION</label>
                    </div>
                </div>
              <!-- Conditional subforms based on project type -->
                <div class="mt-4" id="section-commune" style="display:none;">
                    <h3 class="h5 mb-3">Options pour COMMUNE</h3>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="commune_opt1" name="options_commune[]" class="custom-control-input" value="Appel aux bénévoles / Actions collectives">
                            <label class="custom-control-label" for="commune_opt1">Appel aux bénévoles / Actions collectives</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="commune_opt2" name="options_commune[]" class="custom-control-input" value="Création d'une structure (école, résidence, ...), d'un local commercial, d'un pôle santé, pharmacie">
                            <label class="custom-control-label" for="commune_opt2">Création d'une structure (école, résidence, ...), d'un local commercial, d'un pôle santé, pharmacie</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="commune_opt3" name="options_commune[]" class="custom-control-input" value="Location gérance du fonds de commerce (1)">
                            <label class="custom-control-label" for="commune_opt3">Location gérance du fonds de commerce (1)</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="commune_opt4" name="options_commune[]" class="custom-control-input" value="Recherche de partenaire">
                            <label class="custom-control-label" for="commune_opt4">Recherche de partenaire</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="commune_opt5" name="options_commune[]" class="custom-control-input" value="Exposer mon autre projet">
                            <label class="custom-control-label" for="commune_opt5">Exposer mon autre projet</label>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4" id="section-entreprise" style="display:none;">
                    <h3 class="h5 mb-3">Options pour ENTREPRISE / COMMERCE</h3>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="entreprise_opt1" name="options_entreprise[]" class="custom-control-input" value="Proposer durablement une Alliance, une Coopération, un Partenariat, la création d'une filiale, Devenir franchiseur, diversification d'activité">
                            <label class="custom-control-label" for="entreprise_opt1">Proposer durablement une Alliance, une Coopération, un Partenariat, la création d'une filiale, Devenir franchiseur, diversification d'activité</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="entreprise_opt2" name="options_entreprise[]" class="custom-control-input" value="Recherche occasionnelle d'un formateur, d'un fournisseur, d'un prestataire, d'un vendeur, sous-traiter une partie de mon activité">
                            <label class="custom-control-label" for="entreprise_opt2">Recherche occasionnelle d'un formateur, d'un fournisseur, d'un prestataire, d'un vendeur, sous-traiter une partie de mon activité</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="entreprise_opt3" name="options_entreprise[]" class="custom-control-input" value="Mettre en avant ma création d'activité, mes nouveautés, mon savoir-faire">
                            <label class="custom-control-label" for="entreprise_opt3">Mettre en avant ma création d'activité, mes nouveautés, mon savoir-faire</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="entreprise_opt4" name="options_entreprise[]" class="custom-control-input" value="Exposer mon autre projet">
                            <label class="custom-control-label" for="entreprise_opt4">Exposer mon autre projet</label>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4" id="section-artisan" style="display:none;">
                    <h3 class="h5 mb-3">Options pour ARTISAN</h3>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="artisan_opt1" name="options_artisan[]" class="custom-control-input" value="Présentation de mon activité, mes créations, mes services, ma formation">
                            <label class="custom-control-label" for="artisan_opt1">Présentation de mon activité, mes créations, mes services, ma formation</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="artisan_opt2" name="options_artisan[]" class="custom-control-input" value="Proposer durablement une Alliance, une Coopération, un Partenariat">
                            <label class="custom-control-label" for="artisan_opt2">Proposer durablement une Alliance, une Coopération, un Partenariat</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="artisan_opt3" name="options_artisan[]" class="custom-control-input" value="Recherche d'outils, de matériels, matières premières, de compétences">
                            <label class="custom-control-label" for="artisan_opt3">Recherche d'outils, de matériels, matières premières, de compétences</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="artisan_opt4" name="options_artisan[]" class="custom-control-input" value="Exposer mon autre projet">
                            <label class="custom-control-label" for="artisan_opt4">Exposer mon autre projet</label>
                        </div>
                    </div>
                </div>
                
                <div class="mt-4" id="section-association" style="display:none;">
                    <h3 class="h5 mb-3">Options pour ASSOCIATION</h3>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="association_opt1" name="options_association[]" class="custom-control-input" value="Présentation des valeurs, des missions et des actions, Projets en cours, Evènements">
                            <label class="custom-control-label" for="association_opt1">Présentation des valeurs, des missions et des actions, Projets en cours, Evènements</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="association_opt2" name="options_association[]" class="custom-control-input" value="Appels aux adhésions">
                            <label class="custom-control-label" for="association_opt2">Appels aux adhésions</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="association_opt3" name="options_association[]" class="custom-control-input" value="Proposer durablement une Alliance, une Coopération, un Partenariat">
                            <label class="custom-control-label" for="association_opt3">Proposer durablement une Alliance, une Coopération, un Partenariat</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="association_opt4" name="options_association[]" class="custom-control-input" value="Recherche occasionnelle d'un formateur, d'un fournisseur, d'un prestataire, d'un vendeur, sous-traiter une partie de mon activité">
                            <label class="custom-control-label" for="association_opt4">Recherche occasionnelle d'un formateur, d'un fournisseur, d'un prestataire, d'un vendeur, sous-traiter une partie de mon activité</label>
                        </div>
                        <div class="custom-control custom-checkbox mb-2">
                            <input type="checkbox" id="association_opt5" name="options_association[]" class="custom-control-input" value="Exposer mon autre projet">
                            <label class="custom-control-label" for="association_opt5">Exposer mon autre projet</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section 4: Media and Extended Content -->
        <div class="card mb-4" id="media-section">
            <div class="card-header bg-light">
                <h2 class="mb-0">Médias et informations supplémentaires</h2>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="images" class="col-sm-12 col-md-3 col-form-label">Photos (JPG, PNG - Max 5MB par image)</label>
                    <div class="col-sm-12 col-md-9">
                        <div class="custom-file">
                            <input type="file" id="images" name="images[]" class="custom-file-input" multiple accept=".jpg,.jpeg,.png">
                            <label class="custom-file-label" for="images">Choisir des fichiers</label>
                        </div>
                        <small class="form-text text-muted">Maximum 4 photos</small>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="url1" class="col-sm-12 col-md-3 col-form-label">URL 1 (facultatif)</label>
                    <div class="col-sm-12 col-md-9">
                        <input type="url" id="url1" name="url1" class="form-control" placeholder="https://">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="url2" class="col-sm-12 col-md-3 col-form-label">URL 2 (facultatif)</label>
                    <div class="col-sm-12 col-md-9">
                        <input type="url" id="url2" name="url2" class="form-control" placeholder="https://">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="commentaires" class="col-sm-12 col-md-3 col-form-label">Commentaires supplémentaires</label>
                    <div class="col-sm-12 col-md-9">
                        <textarea id="commentaires" name="commentaires" class="form-control" rows="6"></textarea>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section 5: Publication Options -->
        <div class="card mb-4" id="publication-section" style="display:none;">
            <div class="card-header bg-light">
                <h2 class="mb-0">Options de publication</h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label class="d-block mb-3">Format de publication</label>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="format_quart" name="format_publication" value="1/4 page" class="custom-control-input">
                        <label class="custom-control-label" for="format_quart">1/4 page (2 photos, 1 URL)</label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="format_demie" name="format_publication" value="1/2 page" class="custom-control-input">
                        <label class="custom-control-label" for="format_demie">1/2 page (4 photos, 2 URLs)</label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="format_page" name="format_publication" value="1 page" class="custom-control-input">
                        <label class="custom-control-label" for="format_page">1 page (10 photos, 5 URLs)</label>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mb-4">
            <button type="submit" class="btn btn-primary mr-2">Soumettre</button>
            <button type="reset" class="btn btn-secondary">Réinitialiser</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
// Form validation and dynamic behavior
document.addEventListener('DOMContentLoaded', function() {
    // Project type selection
    const projectTypes = document.querySelectorAll('input[name="nature_projet"]');
    const communeSection = document.getElementById('section-commune');
    const entrepriseSection = document.getElementById('section-entreprise');
    const artisanSection = document.getElementById('section-artisan');
    const associationSection = document.getElementById('section-association');
    const publicationSection = document.getElementById('publication-section');
    
    // Date validation
    const dateInput = document.getElementById('date_disponibilite');
    dateInput.addEventListener('blur', function() {
        const dateRegex = /^(\d{2})\/(\d{2})\/(\d{4})$/;
        if (this.value && !dateRegex.test(this.value)) {
            alert('Format de date invalide. Utilisez le format jj/mm/aaaa');
            this.value = '';
        }
    });
    
    // SIRET handling
    const siretInput = document.getElementById('siret');
    siretInput.addEventListener('blur', function() {
        if (this.value.length > 0) {
            // Call API to fetch business data (in a real implementation)
            console.log('Fetching business data for SIRET:', this.value);
            // In a real implementation, this would make an API call and populate the form fields
        }
    });
    
    // Show appropriate section based on project type selection
    projectTypes.forEach(function(radio) {
        radio.addEventListener('change', function() {
            // Hide all sections first
            $(communeSection).hide();
            $(entrepriseSection).hide();
            $(artisanSection).hide();
            $(associationSection).hide();
            
            // Show the relevant section
            if (this.value === 'COMMUNE') {
                $(communeSection).fadeIn();
            } else if (this.value === 'ENTREPRISE / COMMERCE') {
                $(entrepriseSection).fadeIn();
            } else if (this.value === 'ARTISAN') {
                $(artisanSection).fadeIn();
            } else if (this.value === 'ASSOCIATION') {
                $(associationSection).fadeIn();
            }
            
            // Show publication options
            $(publicationSection).fadeIn();
        });
    });
    
    // Monitor checkbox changes to show publication options
    const allCheckboxes = document.querySelectorAll('input[type="checkbox"]');
    allCheckboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const hasChecked = Array.from(allCheckboxes).some(cb => cb.checked);
            if (hasChecked) {
                $(publicationSection).fadeIn();
            }
        });
    });
    
    // Form validation before submit
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        let valid = true;
        const selectedProjectType = document.querySelector('input[name="nature_projet"]:checked');
        
        if (!selectedProjectType) {
            alert('Veuillez sélectionner la nature du projet.');
            valid = false;
        }
        
        if (!valid) {
            e.preventDefault();
        }
    });
    
    // File upload custom display filename
    $('.custom-file-input').on('change', function() {
        let fileName = '';
        if (this.files && this.files.length > 1) {
            fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
        } else {
            fileName = this.files[0].name;
        }
        $(this).next('.custom-file-label').html(fileName);
        
        // File upload validation
        if (this.files.length > 4) {
            alert('Vous pouvez télécharger un maximum de 4 photos.');
            this.value = '';
            $(this).next('.custom-file-label').html('Choisir des fichiers');
            return;
        }
        
        const maxSize = 5 * 1024 * 1024; // 5MB
        for (let i = 0; i < this.files.length; i++) {
            if (this.files[i].size > maxSize) {
                alert(`Le fichier "${this.files[i].name}" dépasse la taille maximale de 5MB.`);
                this.value = '';
                $(this).next('.custom-file-label').html('Choisir des fichiers');
                break;
            }
            
            const fileType = this.files[i].type;
            if (fileType !== 'image/jpeg' && fileType !== 'image/png' && 
                fileType !== 'image/jpg') {
                alert(`Le fichier "${this.files[i].name}" n'est pas au format JPG ou PNG.`);
                this.value = '';
                $(this).next('.custom-file-label').html('Choisir des fichiers');
                break;
            }
        }
    });
});
</script>