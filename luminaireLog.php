<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Manga-World</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width" />
        <!-- CDN BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <!-- ICONE DE PAGE -->
        <link rel="icon" href="assets/icon/shirt-saiyan-is-coming-blanc-pour-homme-et-femme.jpg" />
        <!-- FEUILLE DE STYLE -->
    </head>
    <body>
        <link rel="stylesheet" href="assets/css/style.css" />
      <?php include 'navBar.php';?>
        <!-- Caroussel-->
        <div class="container pt-3">
            <div class="row justify-content-between luminairedbz">
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/shenron.png" height="300" />
                    <div class="card-body">
                        <h2 class="card-text">102.99€</h2>
                        <p class="card-text">Shenron 7 boules de cristal</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/goku vs vegeta.jpg" height="300" />
                    <div class="card-body">
                        <h2 class="card-text">107.99€</h2>
                        <p class="card-text">Vegeta & Goku</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/broly vs goku.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">139.99€</h2>
                        <p class="card-text">Broly vs Goku</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/goku vs freezer.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">102.99€</h2>
                        <p class="card-text">Goku vs Freezer</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/gohan.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">79.99€</h2>
                        <p class="card-text">Gohan SSJ2</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/cell.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">79.99€</h2>
                        <p class="card-text">Cell</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between luminairenaruto">
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/naruto.jpg" height="300" />
                    <div class="card-body">
                        <h2 class="card-text">102.99€</h2>
                        <p class="card-text">Naruto rasengan</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/narutomin.jpg" height="300" />
                    <div class="card-body">
                        <h2 class="card-text">69.99€</h2>
                        <p class="card-text">Naruto rasengan</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/minato vs obito.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">159.99€</h2>
                        <p class="card-text">Minato vs Obito</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/madara.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">199.99€</h2>
                        <p class="card-text">Madara Limited Edition</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between luminaireOnePiece">
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/ace.jpg" height="300" />
                    <div class="card-body">
                        <h2 class="card-text">109.99€</h2>
                        <p class="card-text">Ace</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/zoro.jpg" height="300" />
                    <div class="card-body">
                        <h2 class="card-text">69.99€</h2>
                        <p class="card-text">Zoro</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/ace x marco.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">129.99€</h2>
                        <p class="card-text">Ace & Marco</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/femmeluffy.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">109.99€</h2>
                        <p class="card-text">Boa hancock</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>
