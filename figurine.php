<?php
include'model/model.php';
include'controller/controller.php';
?> 
<?php include 'views/header.php' ?>
    <body>
        <!-- Caroussel-->
  <div class="container">
                <div class="row justify-content-between">
            <?php foreach ($figureList as $figure) { ?>
                    <div class="col-md-5 col-sm-5 col-xs-5 shadow  mb-5 bg-black rounded">
                        <img id="zoom" class="cardManga" src="assets/img/<?= $figure->imgUrl?>" height="300"/>
                        <div class="card-body"><h2 class="card-text"><?= $figure->title ?></h2></div>
                        <div class="card-body"><p class="card-text"><?= $figure->price ?> €</p></div>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                <?php } ?>
                </div>
        </div>
        <a href="#Img1" id="btn7" class="js-scrollTo"><img id="btn8" src="../assets/icon/dbz.png"/></a>
        <?php include 'views/footer.php'; ?>
    </body>
</html>
