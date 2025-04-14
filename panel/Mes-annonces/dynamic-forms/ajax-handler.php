<?php
// filepath: d:\zProyectos\01One\goelans\httpdocs\panel\Mes-annonces\dynamic-forms\ajax-handler.php
require_once('../../../Configurations_bdd.php');
require_once('../../../Configurations.php');
require_once('../../../Configurations_modules.php');

// Check if action is specified
if (!isset($_GET['action']) || empty($_GET['action'])) {
    echo "Action not specified";
    exit;
}

$action = $_GET['action'];

// Handle different actions
switch ($action) {
    case 'get_metiers':
        // Get metiers (jobs) for a specific category
        if (!isset($_GET['categorie_id']) || empty($_GET['categorie_id'])) {
            echo '<option value="">-- Sélectionner un métier --</option>';
            exit;
        }

        $categorie_id = intval($_GET['categorie_id']);
        // Query to get metiers for the selected category
        $req_metiers = $bdd->prepare("SELECT * FROM metiers WHERE id_categorie = ? ORDER BY nom_metier ASC");
        $req_metiers->execute(array($categorie_id));

        // Generate options HTML
        $html = '<option value="">-- Sélectionner un métier --</option>';
        while ($metier = $req_metiers->fetch(PDO::FETCH_ASSOC)) {
            $html .= '<option value="' . $metier['id'] . '">' . $metier['nom_metier'] . '</option>';
        }

        echo $html;
        break;

    default:
        echo "Unknown action";
        break;
}
?>
