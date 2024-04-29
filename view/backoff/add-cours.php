<?php
include '../../config/connexion.php';
include '../../controler/coursC.php'; // Assure-toi que le chemin vers le contrôleur est correct


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<!--Meta Responsive tag-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link rel="stylesheet" href="assets/css/cours.css">
    
    
   

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="4.png" type="image/x-icon">
    <title>EduIsland</title>
</head>
<body>
    

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="4.png" alt="Logo" width="70" height="50" class="d-inline-block align-top me-2"> EduIsland
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Courses</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Our Team</a></li>
                            
                            <li><a class="dropdown-item" href="#">tests</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <button class="btn btn-primary d-none d-lg-block">Join Now <i class="fas fa-arrow-right ms-3"></i></button>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="container-fluid bg-primary py-5 mb-5" style="max-height: 370px;">
        <!-- Ajout de la propriété style pour définir une hauteur maximale -->
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 text-center">
                    <div class="d-flex justify-content-center mb-4">
                        <!-- Ajout des classes d-flex et justify-content-center pour centrer l'image -->
                        
                    </div>
                    <h1 class="display-3 text-white">add Courses</h1>
                    <!-- Ajout de la classe text-center pour centrer le titre -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                            <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.php" aria-current="page" class="text-white">List</a></li>
                            <li class="breadcrumb-item"><a href="add-cours.php" class="text-white">add Courses</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!-- Bouton d'ouverture du modal -->
<button id="openModalBtn">Add Course</button>

<!-- Modal -->
<div id="myModal" class="modal">
    <!-- Contenu du modal -->
    <div class="modal-content">
        <span class="close">&times;</span>
        
        <!-- Formulaire pour ajouter un cours -->
        <form onsubmit="return validateForm()" method="post" class="formulaire_cours" name="addCourseForm" >
            <label for="matiere">Course:</label>
            <input type="text" id="matiere" name="matiere" placeholder="Course">
            <span class="errormsg" id="matiereError"></span><br>
            
            <label for="niveau">Level:</label>
            <input type="text" id="niveau" name="niveau" placeholder="Level">
            <span class="errormsg" id="niveauError"></span><br>
            
            <label for="nbheure">Nb Hours:</label>
            <input type="text" id="nbheure" name="nbheure" placeholder="Nombre of Hours">
            <span class="errormsg" id="nbheureError"></span><br>
            
            <label for="idt">ID du type de cours:</label>
            <input type="text" id="idt" name="idt" placeholder="Teacher ID">
            <span class="errormsg" id="idtError"></span><br>
            
            <input type="submit" name="submit_Add" value="Add Course">
        </form>

    </div>
    
</div>
<!-- Affichage du message -->
<?php if(isset($_GET['message'])): ?>
            <?php if ($_GET['message'] != 1): ?>
                <div class="error-message"><?php echo $_GET['message']; ?></div>
            <?php else: ?>
                <div class="success-message">The course has been added succesfully.</div>
            <?php endif; ?>
        <?php endif; ?>





    <!-- Liens vers les fichiers JavaScript -->
    <script src="assets/js/cours.js"></script>
    <!-- Footer -->
    <!-- Insérez ici le contenu de la section "Footer " de la template -->
    <footer class="container-fluid bg-dark text-light pt-5 mt-5 wow fadeIn " data-wow-delay="0.1s ">
       
        <!-- Back to Top -->
        <a href="# " class="btn btn-lg btn-primary btn-lg-square back-to-top "><i class="bi bi-arrow-up "></i></a>
    </footer>

</body>
</html>
