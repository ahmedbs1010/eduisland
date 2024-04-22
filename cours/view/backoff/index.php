<?php
include '../../controler/coursC.php';
include '../../controler/teacherC.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Rami">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Custom style.css-->
    <link rel="stylesheet" href="assets/css/quicksand.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <!--Chartist CSS-->
    <link rel="stylesheet" href="assets/css/chartist.min.css">
    <!--Bootstrap Calendar-->
    <link rel="stylesheet" href="assets/js/calendar/bootstrap_calendar.css">
    <!--JsGrid CSS-->
    <link rel="stylesheet" href="assets/css/jsgrid.min.css">
    <link rel="stylesheet" href="assets/css/jsgrid-theme.min.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>EduIsland</title>
</head>

<body>

    <!--Page Wrapper-->

    <div class="container-fluid">

        <!--Header-->
        <div class="row header shadow-sm">

            <!--Logo-->
            <div class="col-sm-3 pl-0 text-center header-logo">
                <div class="bg-theme mr-3 pt-3 pb-2 mb-0">

                    <h3 class="logo"><a href="#" class="text-secondary logo"><i class="fa fa-rocket"></i> Edu<span class="small">Island</span></a></h3>
                </div>
            </div>
            <!--Logo-->
            <!--Header Menu-->
            <div class="col-sm-9 header-menu pt-2 pb-0">
                <div class="row">

                    <!--Menu Icons-->
                    <div class="col-sm-4 col-8 pl-0">
                        <!--Toggle sidebar-->
                        <span class="menu-icon" onclick="toggle_sidebar()">
                    <span id="sidebar-toggle-btn"></span>
                        </span>
                        <!--Toggle sidebar-->
                        <!--Notification icon-->
                        <div class="menu-icon">
                            <a class="" href="#" onclick="toggle_dropdown(this); return false" role="button" class="dropdown-toggle">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-danger">5</span>
                            </a>
                            <div class="dropdown dropdown-left bg-white shadow border">
                                <a class="dropdown-item" href="#"><strong>Notifications</strong></a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-primary">
                                            <i class="fa fa-bookmark"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Meeting</strong></h6>
                                            <p>You have a meeting by 8:00</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-secondary">
                                            <i class="fa fa-link"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Events</strong></h6>
                                            <p>Launching new programme</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-warning">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0"><strong>Personnel</strong></h6>
                                            <p>New employee arrival</p>
                                            <small class="text-success">09:23am</small>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center link-all" href="#">See all notifications ></a>
                            </div>
                        </div>
                        <!--Notication icon-->

                        <!--Inbox icon-->
                        <span class="menu-icon inbox">
                    <a class="" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="badge badge-danger">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left mt-10 animated zoomInDown" aria-labelledby="dropdownMenuLink3">
                            <a class="dropdown-item" href="#"><strong>Unread messages</strong></a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <div class="media">
                                    <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                        <p>How are you?</p>
                                        <small class="text-success">09:23am</small>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <div class="media">
                                    <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                        <p>How are you?</p>
                                        <small class="text-success">09:23am</small>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <div class="media">
                                    <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                        <p>How are you?</p>
                                        <small class="text-success">09:23am</small>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-center link-all" href="#">View all messages</a>
                        </div>
                        </span>
                        <!--Inbox icon-->
                        <span class="menu-icon">
                    <i class="fa fa-th-large"></i>
                </span>
                    </div>
                    <!--Menu Icons-->

                    <!--Search box and avatar-->
                    <div class="col-sm-8 col-4 text-right flex-header-menu justify-content-end">
                        <div class="search-rounded mr-3">
                            <input type="text" class="form-control search-box" placeholder="Enter keywords.." />
                        </div>
                        <div class="mr-4">
                            <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/img/profile.jpg" alt="Adam" class="rounded-circle" width="50px" height="50px">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mt-13" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"><i class="fa fa-user pr-2"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-th-list pr-2"></i> Tasks</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-book pr-2"></i> Projects</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="fa fa-power-off pr-2"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                    <!--Search box and avatar-->
                </div>
            </div>
            <!--Header Menu-->
        </div>
        <!--Header-->



        <!--Main Content-->

        <div class="row main-content">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="assets/img/client-img4.png" alt="" class="rounded-circle" />
                        <p><strong>Jonathan Clarke</strong></p>
                        <span class="text-primary small"><strong>UI/UX Designer</strong></span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('dashboard'); return false" class=""><i class="fa fa-dashboard mr-3"> </i>
                        <span class="none">Dashboard <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                    </a>
                                <ul class="children" id="dashboard">
                                    <li class="child"><a href="index.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Default</a></li>
                                    <li class="child"><a href="index2.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Analytics</a></li>

                                </ul>
                            </li>

                            <li class="parent">
                                <a href="#" onclick="toggle_menu('tables'); return false" class=""><i class="fa fa-pencil-square mr-3"></i>
                        <span class="none">Tables <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                    </a>
                                <ul class="children" id="tables">
                                    <li class="child"><a href="basic-tables.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Basic Tables</a></li>
                                    <li class="child"><a href="datatable.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Datatables</a></li>
                                    <li class="child"><a href="jsgrid-table.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> JSGrid Tables</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                <h5 class="mb-0"><strong>JsGrid Table</strong></h5>
                <span class="text-secondary">Dashboard <i class="fa fa-angle-right"></i> JsGrid table</span>

                <div class="row mt-3">
                    <div class="col-sm-12">



                        <!--Validation Scenario-->
                        <h1>Courses List</h1>
        
                        <div class="mt-4">
    
    <button class="btn btn-success" data-toggle="modal" data-target="#addCourseModal">Ajouter un cours</button>
</div>

<?php
// Votre code PHP existant pour récupérer et afficher la liste des cours
$serveur = 'localhost';
$login = 'root';
$pwd = "Rubyboubi2020";   
try {
    $conn = new PDO("mysql:host=$serveur;dbname=projectdba", $login, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Préparez et exécutez la requête pour récupérer toutes les lignes de la table "lessons"
    $query = $conn->query("SELECT * FROM lessons");
    $courses = $query->fetchAll(); // Récupérer toutes les lignes de résultat

    // Vérifiez si le résultat est non vide
    if($courses) {
        // Afficher les données dans un tableau HTML
        echo '<table border="2">';
        echo '<tr>';
        foreach($courses[0] as $key => $value) {
            echo '<th>' . $key . '</th>';
        }
        // Ajouter des en-têtes pour les boutons de modification et de suppression
        echo '<th>Modifier</th>';
        echo '<th>Supprimer</th>';
        echo '</tr>';

         // Afficher chaque ligne de résultat dans une ligne du tableau HTML
        foreach($courses as $course) {
            echo '<tr id="course-row-' . $course['idlesson'] . '">';
            foreach($course as $key => $value) {
                // Ajouter un attribut de données personnalisé pour chaque colonne
                echo '<td class="course-' . $key . '">' . $value . '</td>';
            }
            // Ajouter un bouton "Modifier" avec un événement onClick pour ouvrir le modal de modification
            echo '<td>';
            echo '<button class="modify-course-btn btn btn-primary" data-toggle="modal" data-target="#modifyCourseModal" data-id="' . $course['idlesson'] . '">Modifier</button>';
            echo '</td>';
            // Ajouter un bouton "Supprimer" avec un événement onClick pour ouvrir le modal de confirmation de suppression
            echo '<td>';
            echo '<button class="delete-course-btn btn btn-danger" data-toggle="modal" data-target="#confirmDeleteModal" data-id="' . $course['idlesson'] . '">Supprimer</button>';
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

<!-- Modal d'ajout de cours -->
<div class="modal fade" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="addCourseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCourseModalLabel">Ajouter un cours</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addCourseForm" action="Insertback.php" method="post">
                    <div class="form-group">
                        <label for="matiere">Course</label>
                        <input type="text" class="form-control" id="matiere" name="matiere" required>
                    </div>
                    <div class="form-group">
                        <label for="niveau">Level</label>
                        <input type="text" class="form-control" id="niveau" name="niveau" required>
                    </div>
                    <div class="form-group">
                        <label for="nbheure">Nb Hours</label>
                        <input type="text" class="form-control" id="nbheure" name="nbheure" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="motdepasse">Password</label>
                        <input type="text" class="form-control" id="motdepasse" name="motdepasse" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter le cours</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation de suppression -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmer la suppression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer ce cours ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <form id="deleteCourseForm" action="Deleteback.php" method="post">
                    <input type="hidden" name="courseIdToDelete" id="courseIdToDelete">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal de modification de cours -->
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
                <form id="modifyCourseForm" action="Updateback.php" method="post">
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
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function () {
    $('.modify-course-btn').click(function () {
        // Récupérer les données de la ligne sélectionnée
        var matiere = $(this).closest('tr').find('td[data-matiere]').data('matiere');
        var nbheure = $(this).closest('tr').find('td[data-nbheure]').data('nbheure');
        var niveau = $(this).closest('tr').find('td[data-niveau]').data('niveau');

        // Pré-remplir le formulaire avec les données récupérées
        $('#matiere').val(matiere);
        $('#nbheure').val(nbheure);
        $('#niveau').val(niveau);
        // Récupérer l'ID du cours
        var courseId = $(this).attr('data-id');
        $('#courseId').val(courseId);
    });
});
</script>



                        <!--/Validation Scenario-->

                    </div>
                    </body>

</html>
