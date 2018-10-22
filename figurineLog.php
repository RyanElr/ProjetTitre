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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <!-- ICONE DE PAGE -->
        <link rel="icon" href="assets/icon/shirt-saiyan-is-coming-blanc-pour-homme-et-femme.jpg" />
        <!-- FEUILLE DE STYLE -->
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
<?php include 'navBar.php';?>
        <!-- Caroussel-->
        <div class="container pt-3">
            <div class="row justify-content-between figurinedbz">
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinegoku2.jpg" height="300" />
                    <div class="card-body">
                        <h2 class="card-text">29.99€</h2>
                        <p class="card-text">Goku Ultra Instinct</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinegoku1.jpg" height="300" />
                    <div class="card-body">
                        <h2 class="card-text">39.99€</h2>
                        <p class="card-text">Goku SSJ3</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinevegeta1.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">25.99€</h2>
                        <p class="card-text">Vegeta SSJ</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinevegeta2.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">25.99€</h2>
                        <p class="card-text">Vegeta Blue</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinegotenks1.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">39.99€</h2>
                        <p class="card-text">Gotenks</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinebuu.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">39.99€</h2>
                        <p class="card-text">Buu kid</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinebuu2.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">32.99€</h2>
                        <p class="card-text">Buu ado</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinebuu3.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">29.99€</h2>
                        <p class="card-text">Buubuu</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinefrieza.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">29.99€</h2>
                        <p class="card-text">Frieza</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinecell.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">19.99€</h2>
                        <p class="card-text">Cell</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between figurineNaruto">
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurineminato.jpg" height="300" />
                    <div class="card-body">
                        <h2 class="card-text">29.99€</h2>
                        <p class="card-text">Minato</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinenaruto.jpg" height="300" />
                    <div class="card-body">
                        <h2 class="card-text">39.99€</h2>
                        <p class="card-text">Naruto</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinehashirama.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">25.99€</h2>
                        <p class="card-text">Hashirama Senju</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurineitachi.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">25.99€</h2>
                        <p class="card-text">Itachi</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinekakashi.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">39.99€</h2>
                        <p class="card-text">Kakashi</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinemadara.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">39.99€</h2>
                        <p class="card-text">Madara</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinesasuke.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">32.99€</h2>
                        <p class="card-text">Sasuke</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurineobito.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">29.99€</h2>
                        <p class="card-text">Obito</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinekisame.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">29.99€</h2>
                        <p class="card-text">Kisame</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-5 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinedeidara.jpeg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">19.99€</h2>
                        <p class="card-text">Deidara</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between figurineOnePiece">
                <div class="col-md-6 sm-12 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinekatakuri.jpg" height="300" />
                    <div class="card-body">
                        <h2 class="card-text">29.99€</h2>
                        <p class="card-text">Katakuri</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-6 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurineluffy.jpg" height="300" />
                    <div class="card-body">
                        <h2 class="card-text">39.99€</h2>
                        <p class="card-text">Luffy Gear Fourth</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-6 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinecrocodile.jpeg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">25.99€</h2>
                        <p class="card-text">Crocodile</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-6 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinezoro.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">59.99€</h2>
                        <p class="card-text">Zoro</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-6 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinemagellan.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">39.99€</h2>
                        <p class="card-text">Magellan</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinedoflamingo.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">39.99€</h2>
                        <p class="card-text">Doflamingo</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinemihawk.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">32.99€</h2>
                        <p class="card-text">Mihawk</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurineshanks.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">29.99€</h2>
                        <p class="card-text">Shanks</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinekid.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">29.99€</h2>
                        <p class="card-text">Captain Kid</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-9 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/figurinelaw.jpg" height="300"/>
                    <div class="card-body">
                        <h2 class="card-text">19.99€</h2>
                        <p class="card-text">Trafalgar Law</p>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>
