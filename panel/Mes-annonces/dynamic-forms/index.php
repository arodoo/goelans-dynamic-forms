<?php
// Récupérer l'ID du formulaire sélectionné
$projet = isset($_POST['projet']) ? intval($_POST['projet']) : 
         (isset($selected_projet) ? $selected_projet : 0);

// Define form titles/headers based on the form ID
$form_headers = [
    1 => 'Je veux faire rayonner, développer ma commune, mon entreprise, mon projet',
    2 => 'Je recherche un emploi ou je propose du travail',
    3 => 'Je recherche un partenariat professionnel',
    4 => 'Je souhaite créer mon activité ou faire appel aux mains tendues',
    5 => 'Je vends mon activité, mon commerce ou mon entreprise',
    6 => 'Bien communal à céder',
    7 => 'Je loue, sous-loue, partage mon logement',
    8 => 'Je loue, sous-loue, partage mon commerce ou mon bureau. <br>Une belle opportunité pour collaborer ensemble',
    9 => 'Options génériques pour location commerciale',
    10 => 'Je loue, sous-loue, partage mon équipement'
];

// Mapping des IDs vers les fichiers de formulaires
$form_files = [
    1 => 'developpement_commune.php',
    2 => 'recrutement.php',
    3 => 'partenariat_professionnel.php',
    4 => 'creation_activite.php',
    5 => 'vente_activite.php',
    6 => 'bien_communal.php',
    7 => 'location_logement.php',
    8 => 'location_commerce.php',
    9 => 'option_generique.php',
    10 => 'location_equipement.php'
];

// Si l'ID est valide, afficher le header puis inclure le fichier de formulaire correspondant
if ($projet > 0 && $projet <= 10 && isset($form_files[$projet])) {
    // Display the header for this form
    if (isset($form_headers[$projet])) {
        echo '<div class="row mb-4">
                <div class="col-12">
                    <h2 class="text-center">' . $form_headers[$projet] . '</h2>
                </div>
              </div>';
    }
    
    // Include the form file
    include(__DIR__ . '/' . $form_files[$projet]);
} else {
    // Message par défaut si aucun projet n'est sélectionné
    echo '<div class="alert alert-info">Veuillez sélectionner un type de projet pour afficher les options correspondantes.</div>';
}
?>
