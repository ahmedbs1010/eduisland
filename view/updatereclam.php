<?php
include '../controller/reclamC.php';
include '../model/reclamC.php'; // Update the path to match the location of reclam.php


$error = "";

// Create an instance of the controller
$reclamC = new reclamsC();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["idR"]) &&
        isset($_POST["idU"]) &&
        isset($_POST["sub"]) &&
        isset($_POST["typee"]) &&
        isset($_POST["fed"])
    ) {
        if (
            !empty($_POST["idR"]) &&
            !empty($_POST["idU"]) &&
            !empty($_POST["sub"]) &&
            !empty($_POST["typee"]) &&
            !empty($_POST["fed"])
        ) {
            // Fetch form data
            $idR = $_POST["idR"];
            $idU = $_POST["idU"];
            $subject = $_POST["sub"];
            $description = $_POST["typee"];
            $feedback = $_POST["fed"];

            // Create a new Reclam object
            $reclams = new reclamC(null, $idU, $subject, $description,$feedback);

            // Call the update method
            $reclamC->updatereclam($reclams, $idR, $idU);


            header('Location: listreclam.php');
            exit;
        } else {
            $error = "Missing information";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
    <button><a href="listreclam.php">Back to list</a></button>
    <hr>
    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="idR">idReclamation:</label></td>
                <td>
                    <input type="text" id="idR" name="idR" />
                    <span id="erreuridR" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="idU">idUser:</label></td>
                <td>
                    <input type="text" id="idU" name="idU" />
                    <span id="erreuridU" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="sub">Subject:</label></td>
                <td>
                    <select id="sub" name="sub">
                        <option value="cours">cours</option>
                        <option value="prof">prof</option>
                        <option value="autre">autre</option>
                    </select><br>
                </td>
            </tr>
            <tr>
                <td><label for="desc">Description:</label></td>
                <td>
                    <input type="text" id="desc" name="typee" />
                    <span id="erreurDesc" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="fed">Feedback:</label></td>
                <td>
                    <input type="text" id="fed" name="fed" />
                    <span id="erreurFed" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Save">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>


    

</body>
</html>
