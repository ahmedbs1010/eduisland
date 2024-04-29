
    <?php
    $server = "localhost";
    $login = "root";
    $dbName = "projectdba";
    $pwd = "Rubyboubi2020";
  // Établir une connexion à la base de données
$conn = mysqli_connect($server, $login, $pwd, $dbName);

// Vérifier la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    ?>
