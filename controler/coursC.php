<?php

include  '../../config/connexion.php';
include  '../../model/cours.php';
    
$cours = new Cours($conn);

if (isset($_POST["submit_Add"])) {
    $matiere = $_POST["matiere"];
    $niveau = $_POST["niveau"];
    $nbheure = $_POST["nbheure"];
    $idt = $_POST["idt"];
    
    // Vérification si le cours existe déjà
    $sql_check = "SELECT * FROM lessons WHERE matiere = ? AND niveau = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("ss", $matiere, $niveau);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();
    if ($result_check->num_rows > 0) {
        $message = "Erreur : The course is already existant";
    } else {
        // Ajout du cours dans la base de données
        $message = $cours->createcours($matiere, $niveau, $nbheure, $idt);
    }
    
    // Rediriger vers une autre page après l'ajout
    header("Location: add-cours.php?message=" . urlencode($message));
    exit;
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

            $message = $cours->updatecours($idlesson, $matiere, $nbheure, $niveau,  $idt);
            header("Location: index.php");
            }
    }




/************delete************ */

if(isset($_POST['submit_delete'])) {
    if(isset($_POST["idlesson"])) {
        $idlesson = $_POST["idlesson"];
        $message = $cours->deletecours($idlesson);
        echo $message;
        header("Location: index.php");
    } else {
        // Si l'identifiant de  cours n'est pas défini dans $_POST
        echo "cours ID is missing in the form submission.";
    }
}


/*************Affichage********************** */


$cours = $cours->getAllcours();

?>
