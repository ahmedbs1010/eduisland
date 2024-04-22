<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $serveur = 'localhost';
    $login = 'root';
    $pwd = "";
    try {
        $conn = new PDO("mysql:host=$serveur;dbname=test1", $login, $pwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $query = $conn->prepare("DELETE FROM users where id=:id");

        $query->execute([
            'id' => 25
        ]);
        echo $query->rowCount() . 'records deleted successfully';
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    ?> 
</body>
</html>