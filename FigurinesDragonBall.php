<?php
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
            <?php foreach ($figureDragonBallList as $luminaire) { ?>
                    <div class="col-5 shadow p-3 mb-5 bg-black rounded">
                        <img id="zoom" class="cardManga" src="assets/img/<?= $luminaire->imgUrl?>" height="300"/>
                        <div class="card-body"><h2 class="card-text"><?= $luminaire->title ?></h2></div>
                        <div class="card-body"><p class="card-text"><?= $luminaire->price ?>€</p></div>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                <?php } ?>
                </div>
        </div>
        <a href="#Img1" id="btn7" class="js-scrollTo"><img id="btn8" src="../assets/icon/dbz.png"/></a>
        <?php include 'views/footer.php'; ?>
    </body>
</html>