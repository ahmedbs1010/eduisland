<?php
// Connexion à la base de données
$server = "localhost";
$login = "root";
$dbName = "projectdba";
$pwd = "Rubyboubi2020";
$conn = mysqli_connect($server, $login, $pwd, $dbName);

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Récupérer les données de la table typecours
$typecoursQuery = "SELECT * FROM typecours";
$typecoursResult = mysqli_query($conn, $typecoursQuery);
$typecours = mysqli_fetch_all($typecoursResult, MYSQLI_ASSOC);

// Récupérer les données de la table lessons
$lessonsQuery = "SELECT * FROM lessons";
$lessonsResult = mysqli_query($conn, $lessonsQuery);
$lessons = mysqli_fetch_all($lessonsResult, MYSQLI_ASSOC);

// Ajouter l'attribut 'matiere' de la table 'lessons' au tableau 'typecours'
foreach ($typecours as &$Typecours) {
    foreach ($lessons as $Lesson) {
        if ($Typecours['idlesson'] === $Lesson['idlesson']) {
            $Typecours['matiere'] = $Lesson['matiere'];
            break;
        }
    }
}

// Utiliser TCPDF pour générer le PDF
require_once('tcpdf/tcpdf.php');

$pdf = new TCPDF();
$pdf->AddPage();

// Définir les styles CSS
$style = "
    <style>
    h2 {
        color: #ff5100; /* Bleu turquoise */
        text-align: center;
        font-size: 44px;
        margin-top: 40px;
    }   
    h1 {
            color: #87CEEB;; /* Bleu turquoise */
            text-align: center;
            font-size: 24px;
            margin-top: 30px;
        }
        table {
            width: 100%;
            height: 100%; /* Hauteur de ligne plus grande */
            border-collapse: collapse;
            margin-bottom: 60px; /* Espacement entre les tableaux */
        }
        th, td {
            padding: 30px; /* Élargir l'espace autour du texte */
            border: 2px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #87CEEB; /* Bleu ciel */
            color: #87CEEB; /* Texte blanc */
        }
    </style>
";

// Titre "Tables"
$htmlContent = '<h2>Tables</h2>';

// Tableau des typecours
$htmlContent .= $style;
$htmlContent .= '<h1>Liste of users regitred to courses</h1>';
$htmlContent .= '<table>';
$htmlContent .= '<tr><th>Title of course</th><th>Email of users</th><th>Type</th></tr>';
foreach ($typecours as $Typecours) {
    $htmlContent .= '<tr>';
    $htmlContent .= '<td>' . $Typecours['matiere'] . '</td>';
    $htmlContent .= '<td>' . $Typecours['emailuser'] . '</td>';
    $htmlContent .= '<td>' . $Typecours['type'] . '</td>';
    $htmlContent .= '</tr>';
}
$htmlContent .= '</table>';

// Tableau des lessons
$htmlContent .= '<h1>Liste of Courses</h1>';
$htmlContent .= '<table>';
$htmlContent .= '<tr><th>Title</th><th>level</th><th>Nb hours</th><th>ID Teacher</th></tr>';
foreach ($lessons as $Lesson) {
    $htmlContent .= '<tr>';
    $htmlContent .= '<td>' . $Lesson['matiere'] . '</td>';
    $htmlContent .= '<td>' . $Lesson['niveau'] . '</td>';
    $htmlContent .= '<td>' . $Lesson['nbheure'] . '</td>';
    $htmlContent .= '<td>' . $Lesson['idt'] . '</td>';
    $htmlContent .= '</tr>';
}
$htmlContent .= '</table>';

$pdf->writeHTML($htmlContent, true, false, true, false, '');
$pdf->Output('tables.pdf', 'D');

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
