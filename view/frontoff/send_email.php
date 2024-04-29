<?php
// Inclure le fichier autoload.php de PHPMailer
require 'mailing/phpmailer/src/PHPMailer.php';
require 'mailing/phpmailer/src/SMTP.php';

// Créer une nouvelle instance de PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Configurer les paramètres SMTP
$mail->isSMTP();
$mail->Host = 'smtp.example.com';
$mail->SMTPAuth = true;
$mail->Username = 'ahmedbs950@gmail.com';
$mail->Password = 'rami2003*';
$mail->SMTPSecure = 'tls'; // TLS ou SSL
$mail->Port = 587; // Port SMTP

// Configurer l'expéditeur et le destinataire
$mail->setFrom('ahmedbs950@gmail.com', 'Eduisland');
$mail->addAddress('rami.benslimene@esprit.tn', 'Nom du destinataire');

// Configurer le contenu de l'e-mail
$mail->isHTML(true);
$mail->Subject = 'Sujet de l\'e-mail';
$mail->Body = 'Contenu de l\'e-mail';

// Envoyer l'e-mail
if ($mail->send()) {
    echo 'E-mail envoyé avec succès !';
} else {
    echo 'Erreur lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
}
?>
