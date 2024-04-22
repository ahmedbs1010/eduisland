<?php
include '../../controler/collabC.php';
include '../../config/connexion.php';
include '../../controler/partC.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course's List</title>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="icon" href="logo.ico" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="4.png" alt="Logo" width="30" height="30" class="d-inline-block align-top me-2"> EduIsland
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="structure.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="cours.html">Courses</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item " href="#">Our Team</a></li>
                            <li><a class="dropdown-item  nav-link active " href="listecour.php ">liste Course</a></li>
                            <li><a class="dropdown-item " href="# ">tests</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="# ">Contact</a>
                    </li>
                </ul>
                <button class="btn btn-primary d-none d-lg-block ">Join Now <i class="fas fa-arrow-right ms-3 "></i></button>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Courses List</h1>
        
        <?php
        $serveur = 'localhost';
        $login = 'root';
        $pwd = "Rubyboubi2020";   
        try {
            $conn = new PDO("mysql:host=$serveur;dbname=projectdba", $login, $pwd);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
            // Préparez et exécutez la requête pour récupérer toutes les lignes de la table "lessons"
            $query = $conn->query("SELECT * FROM lessons");
            $result = $query->fetchAll(); // Récupérer toutes les lignes de résultat
            
            // Vérifiez si le résultat est non vide
            if($result) {
                // Afficher les données dans un tableau HTML
                echo '<table border="2">';
                echo '<tr>';
                foreach($result[0] as $key => $value) {
                    echo '<th>' . $key . '</th>';
                }
                // Ajouter des en-têtes pour les boutons de modification et de suppression
                echo '<th>Modifier</th>';
                echo '<th>Supprimer</th>';
                echo '</tr>';
                
                // Afficher chaque ligne de résultat dans une ligne du tableau HTML
                foreach($result as $row) {
                    echo '<tr id="course-row-' . $row['idlesson'] . '">';
                    foreach($row as $value) {
                        echo '<td class="course-' . $value . '">' . $value . '</td>';
                    }
                    // Ajouter un bouton "Modifier" avec un événement onClick pour ouvrir le modal de modification
                    echo '<td>';
                    echo '<button class="modify-course-btn btn btn-primary" data-toggle="modal" data-target="#modifyCourseModal" data-id="' . $row['idlesson'] . '">Modifier</button>';
                    echo '</td>';
                    // Ajouter un formulaire de suppression
                    echo '<td>';
                    echo '<form action="Delete.php" method="post">';
                    echo '<input type="hidden" name="courseIdToDelete" value="' . $row['idlesson'] . '">';
                    echo '<button type="submit" class="btn btn-danger">Supprimer</button>';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo 'Aucun cours trouvé.';
            }
        } catch(PDOException $e) {
            echo 'Echec de connexion : ' . $e->getMessage();
        }
        ?>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="modifyCourseModal" tabindex="-1" role="dialog" aria-labelledby="modifyCourseModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modifyCourseModalLabel">Modifier le cours</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="modifyCourseForm" action="Update.php" method="post">
              <input type="hidden" name="id" id="courseId">
              <div class="form-group">
                <label for="matiere">Matière</label>
                <input type="text" class="form-control" id="matiere" name="matiere">
              </div>
              <div class="form-group">
                <label for="nbheure">Nombre d'heures</label>
                <input type="text" class="form-control" id="nbheure" name="nbheure">
              </div>
              <div class="form-group">
                <label for="niveau">Niveau</label>
                <input type="text" class="form-control" id="niveau" name="niveau">
              </div>
              <div class="form-group">
                <label for="idt">idteacher</label>
                <input type="text" class="form-control" id="idt" name="idt">
              </div>
              
              <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js "></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
      var modifyButtons = document.querySelectorAll('.modify-course-btn');

      modifyButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
          var courseId = btn.getAttribute('data-id');

          // Récupérer les données du cours pour pré-remplir le formulaire
          var courseRow = document.querySelector('#course-row-' + courseId);
          var matiere = courseRow.cells[1].textContent;
          var niveau = courseRow.cells[3].textContent;
          var nbheure = courseRow.cells[2].textContent;
          var idt = courseRow.cells[6].textContent;

          document.getElementById('courseId').value = courseId;
          document.getElementById('matiere').value = matiere;
          document.getElementById('niveau').value = niveau;
          document.getElementById('nbheure').value = nbheure;
          document.getElementById('idt').value = idt;
        });
      });
    });
    </script>

</body>

</html>
