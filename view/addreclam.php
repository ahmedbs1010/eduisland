<?php

//include 'C:\XAMPP\htdocs\projetWEB\controller/reclamC.php';
//include 'C:\XAMPP\htdocs\projetWEB\model/reclamC.php';
include '../controller/reclamC.php';
include '../model/reclamC.php';

$error = "";

// create client
$reclams = null;

// create an instance of the controller
$reclam = new reclamsC();
if (
    isset($_POST["idR"]) &&
    isset($_POST["idU"]) &&
    isset($_POST["subject"]) &&
    isset($_POST["description"]) &&
    isset($_POST["feedback"])
) {
    echo "Form submitted!"; // Debugging message

    if (
        !empty($_POST['idR']) &&
        !empty($_POST["idU"]) &&
        !empty($_POST["subject"]) &&
        !empty($_POST["description"]) &&
        !empty($_POST["feedback"])
    ) {
        echo "All fields filled!"; // Debugging message

        $reclams = new reclamC(
            
            $_POST['idR'],
            $_POST['idU'],
            $_POST['subject'],
            $_POST['description'],
            $_POST['feedback']
        );
        $reclamC->addreclam($reclams);
        header('Location: listreclam.php');
    } else {
        $error = "Missing information";
        echo "Missing information!"; // Debugging message
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exams </title>
</head>
<body>
    <a href="listreclam.php">Back to list</a>
    <hr>

    <div id="error"></div>

    <form action="" method="POST" id="reclamForm">
        <table>
            <tr>
                <td><label for="idR">idReclamation:</label></td>
                <td>
                    <input type="text" id="idR" name="id" />
                    <span id="erreurid" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="idU">idUser:</label></td>
                <td>
                    <input type="text" id="idU" name="id" />
                    <span id="erreuridu" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td> <label for="sub">subject:</label></td>
                <td>
                <select id="sub" name="sub">
            <option value="anglai">cours</option>
            <option value="francai">prof</option>
            <option value="arabe">autre</option>
        </select><br>
                </td>
            </tr>
            
                <td><label for="typee">Description:</label></td>
                <td>
                    <input type="text" id="desc" name="typee" />
                    <span id="erreurTypee" style="color: red"></span>
                </td>
            </tr>
            
            
             
            
            <tr>
                <td><label for="nom">Feddback:</label></td>
                <td>
                    <input type="text" id="fed" name="fed" />
                    <span id="erreurNom" style="color: red"></span>
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
    <script>
        
    document.getElementById('reclamForm').addEventListener('submit', function(event) {
        var idR = document.getElementById('idR').value.trim();
        var idU = document.getElementById('idU').value.trim();
        var subject = document.getElementById('sub').value.trim();
        var description = document.getElementById('desc').value.trim();
        var feedback = document.getElementById('fed').value.trim();

        // Clear previous error messages
        var errorDiv = document.getElementById("error");
        errorDiv.innerHTML = '';

        // Regular expressions for validation
        var idRegex = /^\d+$/;
        var descriptionRegex = /^.{1,500}$/;
        var feedbackRegex = /^.{1,100}$/;

        // Validation for idR
        if (!/^\d+$/.test(idR)) {
                event.preventDefault();
                document.getElementById("erreurid").innerHTML = "ID must be a number.";
            }

        

        // Validation for idU
        if (!/^\d+$/.test(idU)) {
                event.preventDefault();
                document.getElementById("erreuridu").innerHTML = "ID USER must be a number.";
            }


        if (description.length > 10) {
                event.preventDefault();
                document.getElementById("erreurTypee").innerHTML = "Description must have fewer than 500 characters";
            }
            if (feedback.length > 10) {
                event.preventDefault();
                document.getElementById("erreurNom").innerHTML = "Feedback must have fewer than 100 characters";
            }
    

    });
</script>


      
</body>
</html>

