<?php
include '../../controler/collabC.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours</title>
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
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="logo.ico" type="image/x-icon">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

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
                        <a class="nav-link active" aria-current="page" href="cours.html">Courses</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Our Team</a></li>
                            <li><a class="dropdown-item" href="listecour.php">liste Course</a></li>
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
    <div class="container-fluid bg-primary py-5 mb-5" style="max-height: 300px;">
        <!-- Ajout de la propriété style pour définir une hauteur maximale -->
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 text-center">
                    <div class="d-flex justify-content-center mb-4">
                        <!-- Ajout des classes d-flex et justify-content-center pour centrer l'image -->
                        <img src="4.png" alt="Image" class="img-fluid" style="max-width: 200px; height:70px;">
                    </div>
                    <h1 class="display-3 text-white">Courses</h1>
                    <!-- Ajout de la classe text-center pour centrer le titre -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent">
                            <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>




    <!-- Courses Start -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Popular Courses</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <!-- Main Content -->
        <div class="container-xxl py-5">
            <div class="container">

                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                    <h1 class="mb-5">Our Popular Courses</h1>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/italien.jfif" alt="">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="listecour.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;" data-bs-toggle="modal" data-bs-target="#joinCourseItalianModal">Join Now</a>


                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">$89.00</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>Quality</small>
                                </div>
                                <h5 class="mb-4">Italian language B2</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>mr Italian</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>29 Hrs</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>18 Students</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/spanish.jfif" alt="">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="listecour.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;" data-bs-toggle="modal" data-bs-target="#joinCourseModalSpanish">Join Now</a>

                                </div>
                            </div>
                            <div class="text-center p-4 pb-0 ">
                                <h3 class="mb-0 ">$109.00</h3>
                                <div class="mb-3 ">
                                    <small class="fa fa-star text-primary "></small>
                                    <small class="fa fa-star text-primary "></small>
                                    <small class="fa fa-star text-primary "></small>
                                    <small class="fa fa-star text-primary "></small>
                                    <small class="fa fa-star text-primary "></small>
                                    <small>Quality</small>
                                </div>
                                <h5 class="mb-4 ">Spanish language B2</h5>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i class="fa fa-user-tie text-primary me-2 "></i>mr Spanish</small>
                                <small class="flex-fill text-center border-end py-2 "><i class="fa fa-clock text-primary me-2 "></i>32 Hrs</small>
                                <small class="flex-fill text-center py-2 "><i class="fa fa-user text-primary me-2 "></i>12 Students</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.5s ">
                        <div class="course-item bg-light ">
                            <div class="position-relative overflow-hidden ">
                                <img class="img-fluid " src="img/portog.jfif " alt=" ">
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4 ">
                                    <a href="listecour.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end " style="border-radius: 30px 0 0 30px; ">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;" data-bs-toggle="modal" data-bs-target="#joinCourseModalPortuguese">Join Now</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0 ">
                                <h3 class="mb-0 ">$119.00</h3>
                                <div class="mb-3 ">
                                    <small class="fa fa-star text-primary "></small>
                                    <small class="fa fa-star text-primary "></small>
                                    <small class="fa fa-star text-primary "></small>
                                    <small class="fa fa-star text-primary "></small>
                                    <small class="fa fa-star text-primary "></small>
                                    <small>Quality</small>
                                </div>
                                <h5 class="mb-4 ">portuguese language B2</h5>
                            </div>
                            <div class="d-flex border-top ">
                                <small class="flex-fill text-center border-end py-2 "><i class="fa fa-user-tie text-primary me-2 "></i>mr Portuguese</small>
                                <small class="flex-fill text-center border-end py-2 "><i class="fa fa-clock text-primary me-2 "></i>35 Hrs</small>
                                <small class="flex-fill text-center py-2 "><i class="fa fa-user text-primary me-2 "></i>30 Students</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bouton pour afficher la modale d'ajout de cours -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCourseModal">Add Course</button>

        <!-- Modale pour ajouter un nouveau cours -->
        <div class="modal fade" id="addCourseModal" tabindex="-1" aria-labelledby="addCourseModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCourseModalLabel">Add New Course</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Formulaire pour ajouter un nouveau cours -->
                        <form id="addCourseForm" action="insert.php" method="POST">
                            <div class="mb-3">
                                <label for="courseId" class="form-label">ID Lesson</label>
                                <input type="text" class="form-control" id="courseId" required>
                            </div>
                            <div class="mb-3">
                                <label for="courseTitle" class="form-label">Course Title</label>
                                <input type="text" class="form-control" id="courseTitle" required>
                            </div>
                            <div class="mb-3">
                                <label for="courselevel" class="form-label">Niveau</label>
                                <input type="text" class="form-control" id="courselevel" required>
                            </div>
                            <div class="mb-3">
                                <label for="courseHours" class="form-label">Number of Hours</label>
                                <input type="number" class="form-control" id="courseHours" required>
                            </div>
                            <!-- Ajoutez ici d'autres champs pour les détails du cours si nécessaire -->
                            <button type="submit" class="btn btn-primary">Add Course</button>
                            <button id="saveDataBtn">Enregistrer</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->

        <div class="modal fade" id="joinCourseItalianModal" tabindex="-1" aria-labelledby="joinCourseItalianModalLabel" aria-hidden="true">
            <form action="Insert.php" method="POST">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="joinCourseItalianModalLabel">Join Course</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="courseForm" action="insert.php" method="post">

                                <input type="hidden" name="matiere" value="Italian">
                                <input type="hidden" name="niveau" value="B2">
                                <input type="hidden" name="nbheure" value="29">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <!-- Message de succès -->
                                <div id="successMessage" class="mt-3" style="display: none;">
                                    <div class="alert alert-success" role="alert">
                                        Your form has been submitted successfully!
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </form>

        </div>

        <!-- Modal pour le cours d'espagnol -->
        <div class="modal fade" id="joinCourseModalSpanish" tabindex="-1" aria-labelledby="joinCourseModalSpanishLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="joinCourseModalSpanishLabel">Join Spanish Course</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="courseForm" action="insert.php" method="post">

                            <input type="hidden" name="matiere" value="Spanish">
                            <input type="hidden" name="niveau" value="B2">
                            <input type="hidden" name="nbheure" value="32">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal pour le cours de portugais -->
        <div class="modal fade" id="joinCourseModalPortuguese" tabindex="-1" aria-labelledby="joinCourseModalPortugueseLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="joinCourseModalPortugueseLabel">Join Portuguese Course</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="courseFormPortuguese" action="insert.php" method="post">

                            <input type="hidden" name="matiere" value="Portuguese">
                            <input type="hidden" name="niveau" value="B2">
                            <input type="hidden" name="nbheure" value="35">
                            <div class="mb-3">
                                <label for="emailPortuguese" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script src="js/new.js "></script>


    </body>

    </html>


    <!-- Testimonial -->
    <!-- Insérez ici le contenu de la section "Testimonial " de la template -->

    <!-- Footer -->
    <!-- Insérez ici le contenu de la section "Footer " de la template -->
    <footer class="container-fluid bg-dark text-light pt-5 mt-5 wow fadeIn " data-wow-delay="0.1s ">
        <div class="container py-5 ">
            <div class="row g-5 ">
                <div class="col-lg-3 col-md-6 ">
                    <h4 class="text-white mb-3 ">Contact</h4>
                    <p class="mb-2 "><i class="fa fa-map-marker-alt me-3 "></i>123 Street, New York, USA</p>
                    <p class="mb-2 "><i class="fa fa-phone-alt me-3 "></i>+012 345 67890</p>
                    <p class="mb-2 "><i class="fa fa-envelope me-3 "></i>info@example.com</p>
                    <div class="d-flex pt-2 ">
                        <a class="btn btn-outline-light btn-social " href="# "><i class="fab fa-twitter "></i></a>
                        <a class="btn btn-outline-light btn-social " href="# "><i class="fab fa-facebook-f "></i></a>
                        <a class="btn btn-outline-light btn-social " href="# "><i class="fab fa-youtube "></i></a>
                        <a class="btn btn-outline-light btn-social " href="# "><i class="fab fa-linkedin-in "></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <h4 class="text-white mb-3 ">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto " style="max-width: 400px; ">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5 " type="text " placeholder="Your email ">
                        <button type="button " class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2 ">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="copyright ">
                <div class="row ">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 ">
                        &copy; <a class="border-bottom " href="# ">EduIsland</a>, All Right Reserved <br><br>

                    </div>
                    <div class="col-md-6 text-center text-md-end ">
                        <div class="footer-menu ">
                            <a href="structure.php ">Home</a>
                            <a href="# ">Cookies</a>
                            <a href="# ">Help</a>
                            <a href="# ">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back to Top -->
        <a href="# " class="btn btn-lg btn-primary btn-lg-square back-to-top "><i class="bi bi-arrow-up "></i></a>
    </footer>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "></script>
    <script src="lib/wow/wow.min.js "></script>
    <script src="lib/easing/easing.min.js "></script>
    <script src="lib/waypoints/waypoints.min.js "></script>
    <script src="lib/owlcarousel/owl.carousel.min.js "></script>

    <!-- Template Javascript -->
    <script src="js/main.js "></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>