<?php
include '../../config/connexion.php';
include '../../model/typecours.php';

// Création d'une instance de la classe typecours
$typecours = new typecours($conn);

if(isset($_POST["ajouter"])) {
    // Récupérer les données du formulaire
    $idtype = $_GET['idtype'];
    $nomtypecours = $_POST["matieretype"];
    $matieretypecours = $_POST["type"];
    
  

    // Appeler la méthode createtypecours pour insérer le typecours dans la base de données
    $message = $typecours->createtypecours($idtype, $type, $matieretype );
    
    // Rediriger vers forum.php avec un message de succès ou d'erreur
    header("Location: forum.php?id=" . $idtype . "&message=" . urlencode($message));
   
}

/************delete************ */

if(isset($_POST['delete'])) {
    if(isset($_POST["idtype"])) {
        $idtype = $_POST["idtype"];
        $message = $typecours->deletetypecours($idtype);
        echo $message;
        header("Location: index.php");
    } else {
        // Si l'identifiant de la collaboration n'est pas défini dans $_POST
        echo "Collab ID is missing in the form submission.";
    }
}
/******************Update*************** */


if(isset($_POST['update'])) {
    if(isset($_POST["idtype"])) {
        // Récupérer les données du formulaire
        //$id_collaboration = $_GET['id'];
        $idtype = $_POST["idtype"];
        
        $matieretype = $_POST["matieretype"];
        $type = $_POST["type"];
     
        $message = $typecours->updatetypecours($idtype ,$matieretype, $type);
        header("Location: index.php");
        }
}




/*************Affichage********************** */


$typecours = $typecours->getAlltypecours();




?>
