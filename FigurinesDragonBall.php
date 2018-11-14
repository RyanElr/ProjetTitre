<?php
session_start();
include'configuration.php';
include'model/model.php';
include'controller/controller.php';
?>
<?php include'views/header.php';?>
    </head>
    <body>
        <link rel="stylesheet" href="../assets/css/style.css" />
        <!-- Caroussel-->   
        <div class="container">
                <div class="row justify-content-between">
            <?php foreach ($figureDragonBallList as $figure) { ?>
                    <div class="col-5 shadow p-3 mb-5 bg-black rounded">
                        <img id="zoom" class="cardManga" src="assets/img/<?= $figure->imgUrl?>" height="300"/>
                        <div class="card-body"><h2 class="card-text"><?= $figure->title ?></h2></div>
                        <div class="card-body"><p class="card-text"><?= $figure->price ?>€</p></div>
<button type="button" data-qt="1" data-id="<?=$figure->id ?>" data-title="<?= $figure->title?>" data-price="<?= $figure->price ?>" id="n1" class="add-to-cart btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>                   
                    </div>
                <?php } ?>
                </div>
        </div>
        <script src="assets/js/script.js"></script>
        <a href="#Img1" id="btn7" class="js-scrollTo"><img id="btn8" src="../assets/icon/dbz.png"/></a>
        <?php include 'views/footer.php'; ?>
    </body>
</html>