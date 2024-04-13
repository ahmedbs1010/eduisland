<<?php

include '../Controller/ExamsC.php';
include '../model/ExamsC.php';
$error = "";

// create exams
$exams = null;
// create an instance of the controller
$examsC = new ExamsC();


if (
    isset($_POST["nom"]) &&
    isset($_POST["typee"]) &&
    isset($_POST["langue"]) &&
    isset($_POST["niveau"])
) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["typee"]) &&
        !empty($_POST["langue"]) &&
        !empty($_POST["niveau"])
    ) {
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $exams = new Exams(
            null,
            $_POST['nom'],
            $_POST['typee'],
            $_POST['langue'],
            $_POST['niveau']
        );
        var_dump($exams);
        
        $examsC->updateExams($exams, $_POST['id']);

        header('Location:listExams.php');
    } else
        $error = "Missing information";
}



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
    <button><a href="listExams.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id'])) {
        $exams = $examsC->showExams($_POST['id']);
        
    ?>

        <form action="" method="POST">
            <table>
            <tr>
                    <td><label for="nom">Id :</label></td>
                    <td>
                        <input type="text" id="id" name="id" value="<?php echo $_POST['id'] ?>" readonly />
                        <span id="erreurNom" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="nom">Typee :</label></td>
                    <td>
                        <input type="text" id="typee" name="typee" value="<?php echo $exams['typee'] ?>" />
                        <span id="erreurTypee" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="langue">langue :</label></td>
                    <td>
                        <input type="text" id="langue" name="langue" value="<?php echo $exams['langue'] ?>" />
                        <span id="erreurLangue" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="nom">nom :</label></td>
                    <td>
                        <input type="text" id="nom" name="nom" value="<?php echo $exams['nom'] ?>" />
                        <span id="erreurNom" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="niveau">niveau :</label></td>
                    <td>
                        <input type="text" id="niveau" name="niveau" value="<?php echo $exams['niveau'] ?>" />
                        <span id="erreurNiveau" style="color: red"></span>
                    </td>
                </tr>


                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </table>

        </form>
    <?php
    }
    ?>
</body>

</html>