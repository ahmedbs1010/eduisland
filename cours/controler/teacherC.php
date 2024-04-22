<?php
include '../../config/connexion.php';
include '../../model/part.php';

// Création d'une instance de la classe teacher
$teacher = new teacher($conn);

if(isset($_POST["ajouter"])) {
    // Récupérer les données du formulaire
    $idteacher = $_GET['idteacher'];
    $nomteacher = $_POST["nomteacher"];
    $matiereteacher = $_POST["matiereteacher"];
    $email_teacher = $_POST["emailteacher"];
  

    // Appeler la méthode createteacher pour insérer le teacher dans la base de données
    $message = $teacher->createteacher($idteacher, $nomteacher, $matiereteacher , $emailteacher);
    
    // Rediriger vers forum.php avec un message de succès ou d'erreur
    header("Location: forum.php?id=" . $idteacher . "&message=" . urlencode($message));
   
}

/************delete************ */

if(isset($_POST['delete'])) {
    if(isset($_POST["idteacher"])) {
        $id_teacher = $_POST["idteacher"];
        $message = $teacher->deleteteacher($idteacher);
        echo $message;
        header("Location: index.php");
    } else {
        // Si l'identifiant de la collaboration n'est pas défini dans $_POST
        echo "Collab ID is missing in the form submission.";
    }
}
/******************Update*************** */


if(isset($_POST['update'])) {
    if(isset($_POST["idteacher"])) {
        // Récupérer les données du formulaire
        //$id_collaboration = $_GET['id'];
        $idteacher = $_POST["idteacher"];
        $nomteacher = $_POST["nomteacher"];
        $matiereteacher = $_POST["matiereteacher"];
        $emailteacher = $_POST["emailteacher"];
     
        $message = $teacher->updateteacher($id_teacher ,$nom_teacher, $prenom_teacher, $type_teacher);
        header("Location: index.php");
        }
}




/*************Affichage********************** */


$teacher = $teacher->getAllteacher();




?>
