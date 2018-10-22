<?php
session_start();
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
        <link rel="icon" href="assets/icon/shirt-saiyan-is-coming-blanc-pour-homme-et-femme.jpg" />
        <!-- FEUILLE DE STYLE -->
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
       <?php include 'navBar.php';?>
        <!--Caroussel
        -->
        <div class="row">
            <img id="imgManga" src="assets/img/1325788.png.jpeg">
        </div>
        <div class="col-md-12 mt-3">
            <h3>Best Sellers</h3>
        </div>
        <div class="container-fluid pt-3">
            <div class="row justify-content-between figurinedbz">
                <div class="col-md-4 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinegotenks1.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">39.99€</h2>
                        <p class="card-text">Gotenks</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinesasuke.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">32.99€</h2>
                        <p class="card-text">Sasuke</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurineobito.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">29.99€</h2>
                        <p class="card-text">Obito</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-4 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurineluffy.jpg" height="300" />
                    <div class="card-body">
                        <h2 class="card-text">39.99€</h2>
                        <p class="card-text">Luffy Gear Fourth</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-4 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/minato vs obito.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">159.99€</h2>
                        <p class="card-text">Minato vs Obito</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinemihawk.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">32.99€</h2>
                        <p class="card-text">Mihawk</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <a href="#Img1" id="btn7" class="js-scrollTo"><img id="btn8" src="assets/icon/dbz.png"/></a>
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>
