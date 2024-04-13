<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php   
 $serveur='localhost';
 $login='root';
 $pwd="";   
try{
        $conn=new PDO("mysql:host=$serveur;dbname=test1",$login,$pwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
       $query= $conn->prepare("SELECT * from users WHERE id=:id");

       $query->execute(['id'=>25]);
       $result= $query->fetchAll();
    } 
    catch(PDOException $e){
        echo 'echec de connexion:' .$e->getMessage();
    }

    foreach($result as $row){
            echo 'the id:   '.$row['id'].'the fullName is:   '.$row['fullName'] .' email:   ' . $row['email'];
            echo '<br>';
    }
  ?>
</body>
</html>