<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST["ajouter"])) {
    $error = "";
    try {
        // Créer une nouvelle instance PHPMailer
        $mail = new PHPMailer(true);

        // Configuration SMTP pour Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'Ahmedbs950@gmail.com';
        $mail->Password = 'vobv nngw nrfx dqyt';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('Ahmedbs950@gmail.com');
    
        $mail->addAddress('benslimenerami5@gmail.com', 'hbib'); // Remplacez ceci par l'adresse e-mail du destinataire

        // Configurer le contenu de l'e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Nouvelle inscription';
        $mail->Body = 'Contenu de l\'e-mail';

        // Envoyer l'e-mail
        $mail->send();
        echo 'L\'e-mail a été envoyé avec succès';
    } catch (Exception $e) {
        $error = "Erreur lors de l'envoi de l'e-mail: " . $e->getMessage();
        echo $error; // Afficher le message d'erreur pour le débogage
    }
    header('Location: cours.php');
    exit();
}
?>
