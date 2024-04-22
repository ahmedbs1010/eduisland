<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //  $server = "localhost";
    // $login = "root";
    // $pwd = "";
    // try {
    //     $conn=new PDO("mysql:host=$server;dbname=test1",$login,$pwd);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    require './config.php';
    $db = config::getConnexion();
    try {
        $fullName = "Foulen";
        $email = "foulengmail.com";


        /**Préparer l'instruction */
        $requette = $db->prepare("INSERT INTO users(fullName,email) VALUES (:fullName,:email)");

        //**********************bind pour associer des valeurs spécifiques à chaque paramètre de la requête préparée*************
        $requette->bindParam(':fullName', $fullName);
        $requette->bindParam(':email', $email);

        $fullName = "2A12";
        $email = "2A12@gmail.com";
        $requette->execute();

        echo 'added with success';
    } catch (PDOException $e) {
        echo 'echec de connexion:' . $e->getMessage();
    }
    ?>


</body>

</html>