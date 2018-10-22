<?php
session_start();
include_once 'configuration.php';
include_once 'controller/headerCtrl.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Manga-World</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width" />
        <!-- CDN BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
              integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <!-- ICONE DE PAGE -->
        <link rel="icon" href="../assets/icon/shirt-saiyan-is-coming-blanc-pour-homme-et-femme.jpg" />
        <!-- FEUILLE DE STYLE -->
        <link rel="stylesheet" href="../assets/css/style.css" />
    </head>
    <div id="body" class="container-fluid">
            <!-- Tête d'affiche -->
            <script src="../assets/js/script.js"></script>
            <div class="ec1">
                <div class="row test3 d-flex justify-content-center">
                    <!--NavBar -->
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-md ">
                            <img src="../assets/icon/images-ConvertImage.png" class="img-circle" id="Img1" />
                            <div class="navbar-header" >
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-align-justify"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown" >
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="../index.php" id="accueil1">
                                            Accueil
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="../luminaire.php" id="navbarDropdownMenuLink">
                                            Luminaire
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" id="dragon" href="../LuminaireDragonBall.php">Dragon Ball</a>
                                            <a class="dropdown-item" href="../LuminaireNaruto.php">Naruto</a>
                                            <a class="dropdown-item" href="../LuminaireOnePiece.php">One piece</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="../figurine.php" id="navbarDropdownMenuLink">
                                            Figurines
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" href="../FigurinesDragonBall.php">Dragon Ball</a>
                                            <a class="dropdown-item" href="../FigurinesNaruto.php">Naruto</a>
                                            <a class="dropdown-item" href="../FigurinesOnePiece.php">One Piece</a>
                                        </div>
                                    </li>
                                         </ul>
                            </div><div class="collapse navbar-collapse" id="navbarNavDropdown" >
                            <ul class="navbar-nav">
                                <li>
                                    <a class="nav-link logAndRegister" id="log" href="../login.php">
                                        Log In
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link logAndRegister" id="register" href="../register.php">
                                        Register
                                    </a>
                                </li>
                                     <li class="nav-item dropdown">
                                        <a class="nav-link" href="../figurine.php" id="navbarDropdownMenuLink">
                                           <?= NAV_LANGUAGE ?>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                           <a class="dropdown-item" href="<?= $_SERVER['HTTP_REFERER'] ?>/francais/"><?= NAV_FRENCH ?></a>
                                <a class="dropdown-item" href="<?= $_SERVER['HTTP_REFERER'] ?>/english/"><?= NAV_ENGLISH ?></a>
                                        </li>
                             </ul></div>
                                              <form method="POST" action="#">
            <input type="text" placeholder="Search.." name="search" />
            <button><i class="fa fa-search"></i></button>
        </form>
                            <button type="button" class="btn grey" id="myBtn"><span class="fas fa-shopping-cart fa-2x"></span></button>
                        </nav>
                    </div>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title">Panier</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Bienvenu dans votre panier.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                </div>
                                        </div>
                                    </li>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>