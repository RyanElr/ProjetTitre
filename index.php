<?php include'model/model.php';?>
<?php include 'controller/controller.php';
$regexPhoneNumber = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z]+$/';
?>   

        <?php include 'views/header.php' ?>
    <body>
        <!--Caroussel
        -->
        <div class="row">
            <img id="imgManga" src="assets/img/1325788.png.jpeg">
        </div>
        <div class="col-md-12 mt-3">
            <h3>Best Sellers</h3>
        </div>
  <div class="container-fluid">
                <div class="row justify-content-between">
            <?php foreach ($bestSellersList as $bestSellers) { ?>
                    <div class="col-4 shadow p-3 mb-5 bg-black rounded">
                        <img id="zoom" class="cardManga" src="assets/img/<?= $bestSellers->imgUrl?>" height="300"/>
                        <div class="card-body"><h2 class="card-text"><?= $bestSellers->title ?></h2></div>
                        <div class="card-body"><p class="card-text"><?= $bestSellers->price ?>€</p></div>
                        <button type="button" id="n1" class="btn btn-outline-primary btn-lg w-100">AJOUTER AU PANIER</button>
                    </div>
                <?php } ?>
                </div>
        </div>
        <a href="#Img1" id="btn7" class="js-scrollTo"><img id="btn8" src="../assets/icon/dbz.png"/></a>
       <?php include 'views/footer.php';?>
    </body>
</html>
