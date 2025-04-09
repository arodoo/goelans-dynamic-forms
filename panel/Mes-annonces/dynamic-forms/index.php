<?php
// Récupérer l'ID du formulaire sélectionné
$projet = isset($_POST['projet']) ? intval($_POST['projet']) : 
         (isset($selected_projet) ? $selected_projet : 0);

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

// Si l'ID est valide, inclure le fichier de formulaire correspondant
if ($projet > 0 && $projet <= 10 && isset($form_files[$projet])) {
    include(__DIR__ . '/' . $form_files[$projet]);
} else {
    // Message par défaut si aucun projet n'est sélectionné
    echo '<div class="alert alert-info">Veuillez sélectionner un type de projet pour afficher les options correspondantes.</div>';
}
?>
