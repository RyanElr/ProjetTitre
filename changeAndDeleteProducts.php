<?php
session_start();
include'configuration.php';
include'controller/changeAndDeleteProductsCtrl.php';
include'views/header.php';
?>
<?php if (isset($_SESSION['isConnect']) && isset($_SESSION['userType']) && $_SESSION['userType'] == 1 || isset($_SESSION['userType']) && $_SESSION['userType'] == 3) { ?>
    <div class="container-fluid">
        <div class="row justify-content-between">
            <?php foreach ($productList as $products) { ?>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-6 shadow p-3 mb-5 bg-black rounded">
                    <img id="zoom" class="cardManga" src="assets/img/<?= $products->imgUrl ?>" height="300"/>
                    <div class="card-body"><h2 class="card-text"><?= $products->title ?></h2></div>
                    <div class="card-body"><p class="card-text"><?= $products->categoryName ?></p></div>
                    <div class="card-body"><p class="card-text"><?= $products->price ?>€</p></div>
                    <button type="button" id="modifBtn" class="col-12 btn btn-primary btn-md" data-toggle="modal" data-target="#modifProductModal<?= $products->id ?>"  name="modifProduct">Modification du produit</button>
                    <?php include 'modal/modalModifProduct.php' ?>
                    <button type="button" id="deleteBtn" class=" col-12 btn btn-danger btn-md" data-toggle="modal" data-target="#deleteProductModal<?= $products->id ?>">Suppression du produit</button>
                    <?php include 'modal/modalDeleteProduct.php' ?>
                </div>
            <?php } ?> 
        </div>
    </div>
<?php } else { ?>
    <div class="container">
        <div id="infoBoxShadow">
            <div class="alert" id="allUsersProfil">
                <h1>Vous n'avez pas les droits d'administrateur.</h1>
            </div>
        </div>
    </div> 
<?php include 'views/footer.php'; ?>
<?php } ?>
</body>
</html>