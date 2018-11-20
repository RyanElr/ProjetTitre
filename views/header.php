<?php
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
        <div class="row">
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
                                    <a class="nav-link dropdown-toggle" href="../produits.php?cat=1" id="navbarDropdownMenuLink">
                                        Luminaire
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="../produits.php?cat=1&typ=1">Dragon Ball</a>
                                        <a class="dropdown-item" href="../produits.php?cat=1&typ=2">Naruto</a>
                                        <a class="dropdown-item" href="../produits.php?cat=1&typ=3">One piece</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="../produits.php?cat=2" id="navbarDropdownMenuLink">
                                        Figurine
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="../produits.php?cat=2&typ=1">Dragon Ball</a>
                                        <a class="dropdown-item" href="../produits.php?cat=2&typ=2">Naruto</a>
                                        <a class="dropdown-item" href="../produits.php?cat=2&typ=3">One Piece</a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li>
                                    <?php if (!isset($_SESSION['isConnect'])) { ?>
                                        <a class ="nav-link" href="../login.php"><?= NAV_CONNECT ?></a>
                                    </li>
                                    <li>
                                        <a class="nav-link logAndRegister" id="register" href="../register.php">
                                            <?= REGISTER_TITLE ?>
                                        </a>
                                    </li>
                                <?php } else if(isset ($_SESSION['isConnect']) && $_SESSION['userType'] == 1) {?>
                                 <li class="nav-item dropdown">
                                        <a class = "nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdownMenuLink"><?= NAV_WELCOME . $_SESSION['firstname'] ?></a>  
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" <a id="hrefColorPatient" href="../profil.php?id=<?= $_SESSION['id'] ?>"><?= NAV_PROFIL ?></a>
                                                <a class="dropdown-item" <a id="hrefColorPatient" href="../allProfils.php">Tout les profils</a>
                                                    <a class="dropdown-item" <a id="hrefColorPatient" href="../newProducts.php">Ajout de produits</a>
                                            <a class="dropdown-item" href="<?= $_SERVER['PHP_SELF'] ?>?action=disconnect"><?= NAV_DISCONNECT ?></a>
                                        </div>
                                    </li>
                                    <?php } else if(isset ($_SESSION['isConnect']) && $_SESSION['userType'] == 3) {?>
                                    <li class="nav-item dropdown">
                                        <a class = "nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdownMenuLink"><?= NAV_WELCOME . $_SESSION['firstname'] ?></a>  
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" <a id="hrefColorPatient" href="../profil.php?id=<?= $_SESSION['id'] ?>"><?= NAV_PROFIL ?></a>
                                                <a class="dropdown-item" <a id="hrefColorPatient" href="../allProfils.php">Tout les profils</a>
                                                    <a class="dropdown-item" <a id="hrefColorPatient" href="../newProducts.php">Ajout de produits</a>
                                            <a class="dropdown-item" href="<?= $_SERVER['PHP_SELF'] ?>?action=disconnect"><?= NAV_DISCONNECT ?></a>
                                        </div>
                                    </li>
                                <?php } else { ?>
                                    <li class="nav-item dropdown">
                                        <a class = "nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdownMenuLink"><?= NAV_WELCOME . $_SESSION['firstname'] ?></a>  
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item" <a id="hrefColorPatient" href="../profil.php?id=<?= $_SESSION['id'] ?>"><?= NAV_PROFIL ?></a>
                                            <a class="dropdown-item" href="<?= $_SERVER['PHP_SELF'] ?>?action=disconnect"><?= NAV_DISCONNECT ?></a>
                                        </div>
                                    </li>
                                <?php } ?>  
                            </ul>
                        </div>
                        <?php if(isset($_GET['cat'])){ ?>
                        <form method="POST" action="#">
                            <input type="text" placeholder="Rechercher" name="search" />
                            <button><i class="fa fa-search"></i></button>
                        </form>
                        <?php }?>
                                    <button type="button" class="btn grey" id="myBtn"><span class="fas fa-shopping-cart fa-2x"></span></button>
                                    <span class="mini-cart-item-word">0</span>
                               
                            </div>
                        </div>
                    </nav>
                </div>
                <?php include 'panier.php'; ?>
            </div>
        </div>
