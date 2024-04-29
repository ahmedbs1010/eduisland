<?php
include '../../config/connexion.php';

include '../../controler/typecoursC.php';
include '../../controler/coursC.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<!--Meta Responsive tag-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/index.css">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
 
<script src="view/frontoff/js/main.js"></script>
<link rel="icon" href="4.png" type="image/x-icon">

<title>EduIsland</title>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>


<div id="overlay"></div>

    


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
                        <a class="nav-link " aria-current="page" href="#">Courses</a>
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

    
    </section>
    <!-- SIDEBAR -->
    



    <!-- CONTENT -->
    
  
    <!-- NAVBAR -->
     <!-- Header -->
     <div class="container-fluid bg-primary py-5 mb-5" style="max-height: 350px;">
        <!-- Ajout de la propriété style pour définir une hauteur maximale -->
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 text-center">
                    <div class="d-flex justify-content-center mb-4">
                        <!-- Ajout des classes d-flex et justify-content-center pour centrer l'image -->
                        
                    </div>
                    <h1 class="display-3 text-white">List of Courses</h1>
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
    
    <!-- MAIN -->
    <main>
    
    <div class="table-data">
    <div class="table-data order">
        <div class="head">
            <h3>List of Typecours</h3>
        </div>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr> 
                    <th scope="col">Title of course </th>                
                    <th scope="col">Email of user</th>
                    
                    <th scope="col">Type</th>
                    
                    <th scope="col">action</th>
                    <!-- Ajoutez d'autres colonnes au besoin -->
                </tr>
            </thead>
            <tbody>
                <?php foreach($typecours as $Typecours): ?>
                        <td>
                            <?php
                // Récupérer l'ID de la collaboration du typecours
                $idlesson = $Typecours['idlesson'];

                // Exécuter une requête SQL pour récupérer le titre de la collaboration
                $sql = "SELECT matiere FROM lessons WHERE idlesson = $idlesson" ;
                $result = mysqli_query($conn, $sql);

                // Vérifier si la requête a réussi
                if(mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $matiere = $row['matiere'];
                    echo $matiere; // Afficher le titre de la collaboration
                } else {
                    echo "matiere inconnu";
                }
                ?></td>                 
                        <td><?php echo $Typecours['emailuser']; ?></td>
                        <td><?php echo $Typecours['type']; ?></td>

                        <td>
                            <button onclick="openModal('<?php echo $Typecours['idtypecours']; ?>')" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                    </button>
                            <!-- Form for updating typecours -->
                          
                             <div id="myModal_<?php echo $Typecours['idtypecours']; ?>" class="modal" style="display: none;" >
                                <div class="modal-content">
                                    <span class="close" onclick="closeModal('<?php echo $Typecours['idtypecours']; ?>')">&times;</span>
                                    <form  onsubmit="return validateForm()" method="POST" name="formulaire" >
                                        <input type="hidden" name="idtypecours" value="<?php echo $Typecours['idtypecours']; ?>">
                                        <label for="emailuser">Course:</label>
                                        <input id="emailuser" type="email" name="emailuser" value="<?php echo $Typecours['emailuser']; ?>"><br>
                                        <label for="type">Type of course :</label>
                                        <select id="type" name="type">
                                            <option value="PDF" <?php if ($Typecours['type'] == 'PDF') echo 'selected'; ?>>PDF</option>
                                            <option value="Live" <?php if ($Typecours['type'] == 'Live') echo 'selected'; ?>>Live</option>
                                        </select><br>

                                        
                                        
                
                                       
                                        
                                        <button type="submit" name="update" class="btn btn-primary">Enregistrer</button>
                                        
                                    </form>
                                </div>
                            </div>
                            
                            
                        
                        
                        <form action="" method="POST">
                                <input type="hidden" name="idtypecours" value="<?php echo $Typecours['idtypecours']; ?>">
                                <button type="submit" name="delete" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                            </form> </td>

                    
                        <!-- Ajoutez d'autres colonnes au besoin -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

    <div class="table-data">
        <div class="table-data order">
            <div class="head">
                <h3>List of courses</h3>
                
            </div>
            <table class="table table-hover text-center">
                <thead class="table-dark">
                    <tr> 
                        <th scope="col">Title of course</th>                
                        <th scope="col">Level</th>
                        <th scope="col">Number of Hours</th>
                        <th scope="col">ID Teacher</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($cours as $Cours): ?>
                        <tr>   
                            <td><?php echo $Cours['matiere']; ?></td>                 
                            <td><?php echo $Cours['niveau']; ?></td>
                            <td><?php echo $Cours['nbheure']; ?></td>
                            <td><?php echo $Cours['idt']; ?></td>
                            <td>
                                <button onclick="openModal('<?php echo $Cours['idlesson']; ?>')" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </button>
                              
                                <!-- Modal de modification -->
                                <div id="myModal_<?php echo $Cours['idlesson']; ?>" class="modal" style="display: none;">
                                    <div class="modal-content">
                                        <span class="close" onclick="closeModal('<?php echo $Cours['idlesson']; ?>')">&times;</span>
                                        <form method="POST" name="myForm">
                                            <input type="hidden" name="idlesson" value="<?php echo $Cours['idlesson']; ?>"><br>
                                            <label for="matiere">matiere:</label>
                                            <input id="matiere" type="text" name="matiere" value="<?php echo $Cours['matiere']; ?>"><br>
                                            <label for="nbheure">nb hours:</label>
                                            <input id="nbheure" type="text" name="nbheure" value="<?php echo $Cours['nbheure']; ?>"><br>
                                            <label for="niveau">niveau:</label>
                                            <input name="niveau" id="niveau" value="<?php echo $Cours['niveau']; ?>"><br>
                                            <label for="idt">id teacher:</label>
                                            <input id="idt" type="text" name="idt" value="<?php echo $Cours['idt']; ?>"><br>
                                            
                                            <button type="submit" name="submit_update" class="btn btn-primary">Enregistrer</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Fin Modal de modification -->
                                <form action="" method="POST">
                                    <input type="hidden" name="idlesson" value="<?php echo $Cours['idlesson']; ?>">
                                    <button type="submit" name="submit_delete" class="btn btn-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</main>
<h1>Download PDF</h1>
    
    <form action="generate_pdf.php" method="post">
    <button id="downloadPdfBtn" type="submit">Download PDF</button>
    </form>


<!-- Import de la bibliothèque jsPDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>



<script>
    function validateForm() {
        var email = document.getElementById("emailuser").value;
        var type = document.getElementById("type").value;
        var errorFlag = false;

        // Vérification du champ email
        if (email === "") {
            document.getElementById("error-emailuser").innerText = "Enter your email";
            errorFlag = true;
        } else {
            document.getElementById("error-emailuser").innerText = "";
        }

        // Vérification du champ type de cours
        if (type === "") {
            document.getElementById("error-type").innerText = "Select type of course";
            errorFlag = true;
        } else {
            document.getElementById("error-type").innerText = "";
        }

        // Empêcher l'envoi du formulaire si des champs sont vides ou incorrects
        if (errorFlag) {
            return false;
        }
    }
</script>

<script >
    function openModal(id) {
    // Récupérer le modal par son ID
    var modal = document.getElementById("myModal_" + id);
    document.getElementById("overlay").style.display = "block";
    // Afficher le modal
    modal.style.display = "block";
}

function closeModal(id) {
    // Récupérer le modal par son ID
    var modal = document.getElementById("myModal_" + id);
    document.getElementById("overlay").style.display = "none";
    // Cacher le modal
    modal.style.display = "none";
}

</script>

<!-- Footer -->
    <!-- Insérez ici le contenu de la section "Footer " de la template -->
    <footer class="container-fluid bg-dark text-light pt-5 mt-5 wow fadeIn " data-wow-delay="0.1s ">
       
        <!-- Back to Top -->
        <a href="# " class="btn btn-lg btn-primary btn-lg-square back-to-top "><i class="bi bi-arrow-up "></i></a>
    </footer>
    
   
</body>
</html>
