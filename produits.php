<?php
include'configuration.php';
include'model/model.php';
include'controller/controller.php';
include'views/header.php';
?>
<body>
    <!-- Caroussel-->  
<page id="1">
    <menu>Luminaire</menu>
    <div class="container">
        <div class="row justify-content-between">
<?php foreach ($luminaryList as $luminaire) { ?>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/<?= $luminaire->imgUrl ?>" height="300"/>
                    <div class="card-body"><h2 class="card-text"><?= $luminaire->title ?></h2></div>
                    <div class="card-body"><p class="card-text"><?= $luminaire->price ?>€</p></div>
                    <button type="button" data-qt="1" data-id="<?= $luminaire->id ?>" data-title="<?= $luminaire->title ?>" data-price="<?= $luminaire->price ?>" id="n1" class="add-to-cart btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button></div>
<?php } ?>
        </div>
    </div>
</page>
<page id="2">
    <menu>Luminaire</menu>
    <div class="container">
        <div class="row justify-content-between">
<?php foreach ($luminaryDragonBallList as $luminaire) { ?>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/<?= $luminaire->imgUrl ?>" height="300"/>
                    <div class="card-body"><h2 class="card-text"><?= $luminaire->title ?></h2></div>
                    <div class="card-body"><p class="card-text"><?= $luminaire->price ?>€</p></div>
                    <button type="button" data-qt="1" data-id="<?= $luminaire->id ?>" data-title="<?= $luminaire->title ?>" data-price="<?= $luminaire->price ?>" id="n1" class="add-to-cart btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button></div>
<?php } ?>
        </div>
    </div>
</page>
<page id="3">
    <menu>Luminaire</menu>
    <div class="container">
        <div class="row justify-content-between">
<?php foreach ($luminaryNarutoList as $luminaire) { ?>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/<?= $luminaire->imgUrl ?>" height="300"/>
                    <div class="card-body"><h2 class="card-text"><?= $luminaire->title ?></h2></div>
                    <div class="card-body"><p class="card-text"><?= $luminaire->price ?>€</p></div>
                    <button type="button" data-qt="1" data-id="<?= $luminaire->id ?>" data-title="<?= $luminaire->title ?>" data-price="<?= $luminaire->price ?>" id="n1" class="add-to-cart btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button></div>
<?php } ?>
        </div>
    </div>
</page>
<page id="4">
    <menu>Luminaire</menu>
    <div class="container">
        <div class="row justify-content-between">
<?php foreach ($luminaryOnepieceList as $luminaire) { ?>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/<?= $luminaire->imgUrl ?>" height="300"/>
                    <div class="card-body"><h2 class="card-text"><?= $luminaire->title ?></h2></div>
                    <div class="card-body"><p class="card-text"><?= $luminaire->price ?>€</p></div>
                    <button type="button" data-qt="1" data-id="<?= $luminaire->id ?>" data-title="<?= $luminaire->title ?>" data-price="<?= $luminaire->price ?>" id="n1" class="add-to-cart btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button></div>
<?php } ?>
        </div>
    </div>
</page>
<page id="5">
    <menu>Luminaire</menu>
    <div class="container">
        <div class="row justify-content-between">
<?php foreach ($figureList as $figure) { ?>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/<?= $figure->imgUrl ?>" height="300"/>
                    <div class="card-body"><h2 class="card-text"><?= $figure->title ?></h2></div>
                    <div class="card-body"><p class="card-text"><?= $figure->price ?>€</p></div>
                    <button type="button" data-qt="1" data-id="<?= $figure->id ?>" data-title="<?= $figure->title ?>" data-price="<?= $figure->price ?>" id="n1" class="add-to-cart btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button></div>
<?php } ?>
        </div>
    </div>
</page>
<page id="6">
    <menu>Luminaire</menu>
    <div class="container">
        <div class="row justify-content-between">
<?php foreach ($figureDragonBallList as $figure) { ?>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/<?= $figure->imgUrl ?>" height="300"/>
                    <div class="card-body"><h2 class="card-text"><?= $figure->title ?></h2></div>
                    <div class="card-body"><p class="card-text"><?= $figure->price ?>€</p></div>
                    <button type="button" data-qt="1" data-id="<?= $figure->id ?>" data-title="<?= $figure->title ?>" data-price="<?= $figure->price ?>" id="n1" class="add-to-cart btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button></div>
<?php } ?>
        </div>
    </div>
</page>
<page id="7">
    <menu>Luminaire</menu>
    <div class="container">
        <div class="row justify-content-between">
<?php foreach ($figureNarutoList as $figure) { ?>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/<?= $figure->imgUrl ?>" height="300"/>
                    <div class="card-body"><h2 class="card-text"><?= $figure->title ?></h2></div>
                    <div class="card-body"><p class="card-text"><?= $figure->price ?>€</p></div>
                    <button type="button" data-qt="1" data-id="<?= $figure->id ?>" data-title="<?= $figure->title ?>" data-price="<?= $figure->price ?>" id="n1" class="add-to-cart btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button></div>
<?php } ?>
        </div>
    </div>
</page>
<page id="8">
    <menu>Luminaire</menu>
    <div class="container">
        <div class="row justify-content-between">
<?php foreach ($figureOnePieceList as $figure) { ?>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/<?= $figure->imgUrl ?>" height="300"/>
                    <div class="card-body"><h2 class="card-text"><?= $figure->title ?></h2></div>
                    <div class="card-body"><p class="card-text"><?= $figure->price ?>€</p></div>
                    <button type="button" data-qt="1" data-id="<?= $figure->id ?>" data-title="<?= $figure->title ?>" data-price="<?= $figure->price ?>" id="n1" class="add-to-cart btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button></div>
<?php } ?>
        </div>
    </div>
</page>
<script src="assets/js/script.js"></script>
<a href="#Img1" id="btn7" class="js-scrollTo"><img id="btn8" src="../assets/icon/dbz.png"/></a>
<?php include 'views/footer.php'; ?>
</body>
</html>