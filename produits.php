<?php
session_start();
include'configuration.php';
include'controller/produitsCtrl.php';
include'views/header.php';
?>
<body>
<!-- Page produits -->
    <div class="container">
        <div class="row justify-content-between">
<?php foreach ($productList as $products) { ?>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/<?= $products->imgUrl ?>" height="300"/>
                    <div class="card-body"><h2 class="card-text"><?= $products->title ?></h2></div>
                    <div class="card-body"><p class="card-text"><?= $products->price ?>€</p></div>
                    <button type="button" <?php $count++ ?> data-qt="1" data-id="<?= $products->id ?>" data-title="<?= $products->title ?>" data-price="<?= $products->price ?>" id="n1" class="add-to-cart btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button></div>
<?php } ?>
        </div>
    </div>
<script src="assets/js/script.js"></script>
<a href="#Img1" id="btn7" class="js-scrollTo"><img id="btn8" src="../assets/icon/dbz.png"/></a>
<?php include 'views/footer.php'; ?>
</body>
</html>