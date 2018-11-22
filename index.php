<?php 
session_start();
include'configuration.php';
include 'controller/indexCtrl.php';
include 'views/header.php' ?>
    <body>
        <!--Caroussel
        -->
        <div class="row">
            <img id="imgManga" src="assets/img/1325788.png.jpeg">
        </div>
        <?php if (!isset($_SESSION['isConnect']) || isset($_SESSION['isConnect']) && isset($_SESSION['userType']) && $_SESSION['userType'] == 2) { ?>
        <div class="col-md-12 mt-3">
            <h3>Meilleures ventes</h3>
        </div>
  <div class="container">
                <div class="row">
            <?php foreach ($productsList as $product) { ?>
                    <div class="col-md-4 col-lg-6 col-sm-12 col-xs-12 shadow p-3 mb-5 bg-black rounded">
                        <img id="zoom" class="cardManga" src="assets/img/<?= $product->imgUrl?>" height="300"/>
                        <div class="card-body"><h2 class="card-text"><?= $product->title ?></h2></div>
                        <div class="card-body"><p class="card-text"><?= $product->price ?>€</p></div>
                        <button type="button" data-qt="1" data-id="<?=$product->id ?>" data-title="<?= $product->title?>" data-price="<?= $product->price ?>" id="n1" class="add-to-cart btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                <?php } ?>
                </div>
        </div>
        <?php } ?>
        <script src="assets/js/script.js"></script>
        <a href="#Img1" id="btn7" class="js-scrollTo"><img id="btn8" src="../assets/icon/dbz.png"/></a>
       <?php include 'views/footer.php';?>
    </body>
</html>