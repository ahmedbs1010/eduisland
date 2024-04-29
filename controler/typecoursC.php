<?php

include  '../../config/connexion.php';
include  '../../model/typecours.php';

// Création d'une instance de la classe Typecours
$typecours = new Typecours($conn);

if(isset($_POST["ajouter"])) {
    // Récupérer les données du formulaire
    $idlesson = $_GET['id'];
    $emailuser = $_POST["emailuser"];
    $type = $_POST["type"];

    // Vérifier si l'email de l'utilisateur est vide
    if(empty($emailuser)) {
        $message = "Veuillez entrer une adresse e-mail.";
    } else {
        // Préparer la requête SQL pour vérifier si l'e-mail est déjà enregistré pour cette leçon
        $sql = "SELECT COUNT(*) as count FROM typecours WHERE emailuser = ? AND idlesson = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $emailuser, $idlesson);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        
        if($row['count'] > 0) {
            $message = "This user is already registred to this course";
        } else {
            // Appeler la méthode createtypecours pour insérer le typecours dans la base de données
            $message = $typecours->createtypecours($idlesson, $emailuser , $type);
        }
    }

    // Rediriger vers forum.php avec un message de succès ou d'erreur
header("Location: forum.php?id=" . $idlesson . "&message=" . urlencode($message) . "&error=true");
exit; // Arrêter l'exécution du script après la redirection
 
}


/************delete************ */

if(isset($_POST['delete'])) {
    if(isset($_POST["idtypecours"])) {
        $idtypecours = $_POST["idtypecours"];
        $message = $typecours->deletetypecours($idtypecours);
        echo $message;
        header("Location: index.php");
    } else {
        // Si l'identifiant de la collaboration n'est pas défini dans $_POST
        echo "typecours ID is missing in the form submission.";
    }
}
/******************Update*************** */


if(isset($_POST['update'])) {
    if(isset($_POST["idtypecours"])) {
        // Récupérer les données du formulaire
        //$id_collaboration = $_GET['id'];
        $idtypecours = $_POST["idtypecours"];
        
        $emailuser = $_POST["emailuser"];
        $type = $_POST["type"];
     
        $message = $typecours->updatetypecours($idtypecours ,$emailuser, $type);
        header("Location: index.php");
        }
}




/*************Affichage********************** */


$typecours = $typecours->getAlltypecours();




?>
