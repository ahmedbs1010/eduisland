<?php
	include '../../config/connexion.php';
	include  '../../model/cours.php';
    
	$courss = new cours($conn);
if (isset($_POST["submit_Add"])) {
    $matiere = $_POST["matiere"];
    $niveau = $_POST["niveau"];
    $nbheure = $_POST["nbheure"];
    $idt = $_POST["idt"];
    
	$message = $courss->createcours( $idlesson,$matiere, $niveau, $nbheure, $idt);
    header("Location: add-cours.php");
}

    




/******************Update*************** */


    if(isset($_POST['submit_update'])) {
        if(isset($_POST["idlesson"])) {
            // Récupérer les données du formulaire
            $idlesson = $_POST["idlesson"];
            $matiere = $_POST["matiere"];
            $niveau = $_POST["niveau"];
            $nbheure = $_POST["nbheure"];
            $idt = $_POST["idt"];

            $message = $cours->updatecours($idlesson, $matiere, $niveau, $nbheure, $idt);
            header("Location: index.php");
            }
    }




/************delete************ */

if(isset($_POST['submit_delete'])) {
    if(isset($_POST["idlesson"])) {
        $idlesson = $_POST["idlesson"];
        $message = $courss->deletecours($idlesson);
        echo $message;
        header("Location: index.php");
    } else {
        // Si l'identifiant de  cours n'est pas défini dans $_POST
        echo "cours ID is missing in the form submission.";
    }
}


/*************Affichage********************** */


$cours = $courss->getAllcours();

?>
