<?php

include '../Controller/ExamsC.php';

include '../model/ExamsC.php';


$error = "";

// create client
$exams = null;

// create an instance of the controller
$exam = new ExamsC();
if (
    isset($_POST["id"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["typee"]) &&
    isset($_POST["langue"]) &&
    isset($_POST["niveau"])
) {
    echo "Form submitted!"; // Debugging message

    if (
        !empty($_POST['id']) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["typee"]) &&
        !empty($_POST["langue"]) &&
        !empty($_POST["niveau"])
    ) {
        echo "All fields filled!"; // Debugging message

        $exams = new Exams(
            
            $_POST['id'],
            $_POST['nom'],
            $_POST['typee'],
            $_POST['langue'],
            $_POST['niveau']
        );
        $exam->addExams($exams);
        header('Location: listExams.php');
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
    <a href="listExams.php">Back to list</a>
    <hr>

    <div id="error"></div>

    <form action="" method="POST" id="examsForm">
        <table>
            <tr>
                <td><label for="id">Id:</label></td>
                <td>
                    <input type="text" id="id" name="id" />
                    <span id="erreurid" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="nom">Name:</label></td>
                <td>
                    <input type="text" id="nom" name="nom" />
                    <span id="erreurNom" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="typee">Type:</label></td>
                <td>
                    <input type="text" id="typee" name="typee" />
                    <span id="erreurTypee" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="langue">Langue:</label></td>
                <td>
                    <input type="text" id="langue" name="langue" />
                    <span id="erreurLangue" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="niveau">Niveau:</label></td>
                <td>
                    <input type="text" id="niveau" name="niveau" />
                    <span id="erreurNiveau" style="color: red"></span>
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
        document.getElementById("examsForm").addEventListener("submit", function(event) {
            var id = document.getElementById("id").value.trim();
            var nom = document.getElementById("nom").value.trim();
            var typee = document.getElementById("typee").value.trim();
            var langue = document.getElementById("langue").value.trim();
            var niveau = document.getElementById("niveau").value.trim();

            var errorDiv = document.getElementById("error");
            errorDiv.innerHTML = "";

            // Validation rules
            if (!/^\d+$/.test(id)) {
                event.preventDefault();
                document.getElementById("erreurid").innerHTML = "ID must be a number.";
            }

            if (nom.length > 10) {
                event.preventDefault();
                document.getElementById("erreurNom").innerHTML = "Name must be less than or equal to 10 characters.";
            }

            if (typee.length > 5) {
                event.preventDefault();
                document.getElementById("erreurTypee").innerHTML = "Type must be less than or equal to 5 characters.";
            }

            if (langue !== "anglais" && langue !== "francais" && langue !== "arabe") {
                event.preventDefault();
                document.getElementById("erreurLangue").innerHTML = "Language must be 'anglais', 'francais', or 'arabe'.";
            }

            if (!/^[1-3]$/.test(niveau)) {
                event.preventDefault();
                document.getElementById("erreurNiveau").innerHTML = "Niveau must be a number between 1 and 3.";
            }
        });
    </script>
</body>
</html>