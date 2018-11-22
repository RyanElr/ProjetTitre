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
                    <div class="card-body"><p class="card-text"><?= $products->price ?>€</p></div>
                    <button type="button" class="col-12 btn btn-primary btn-md" data-toggle="modal" data-target="#modifProductModal<?= $products->id ?>"  name="modifProduct">Modification du produit</button>
                    <div class="modal fade bd-example-modal-lg" id="modifProductModal<?= $products->id ?>" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Modification du produit</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <form class="col-md-6" id="formModifUser" action="?idChange=<?= $products->id ?>" method="POST">
                                                <div class="form-group col-md-6">
                                                    <select name="category">
                                                        <option disabled="Catégorie" selected>Catégorie</option>
                                                        <option name="category" value="1" >Luminaire</option>
                                                        <option name="category" value="2" >Figurine</option>
                                                    </select>
                                                </div>
                                                <p class="text-danger"><?= isset($formError['category']) ? $formError['category'] : ''; ?></p>
                                                <div class="form-group col-md-6">
                                                    <select name="type">
                                                        <option disabled="Type" selected>Type</option>
                                                        <option name="type" value="1" >Dragon Ball</option>
                                                        <option name="type" value="2" >Naruto</option>
                                                        <option name="type" value="3" >One Piece</option>
                                                    </select>
                                                </div>
                                                <!--Phone Number input -->
                                                <div class="form-group col-md-6">
                                                    <label for="title">Titre</label>
                                                    <input id="title" name="title" value="<?= $products->title ?>" />
                                                    <p class="text-danger"><?= isset($formError['title']) ? $formError['title'] : ''; ?></p>
                                                </div>

                                                <!--Email input -->
                                                <div class="form-group col-md-6">
                                                    <label for="price">Prix</label>
                                                    <input id="price" type="text" name="price" value="<?= $products->price ?>" />
                                                    <p class="text-danger"><?= isset($formError['price']) ? $formError['price'] : ''; ?></p>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="imgUrl">Image : </label>
                                                    <input id="imgUrl" type="file" name="imgUrl" value="<?= isset($imgUrl) ? $imgUrl : '' ?>" />
                                                    <p class="text-danger"><?= isset($formError['imgUrl']) ? $formError['imgUrl'] : ''; ?></p>
                                                </div>
                                                <!--Email input -->
                                                <input type="submit" class="btn btn-primary btn-md" id="btn-form" name="modifProduct" value="Modification du produit" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" id="deleteProduct" class=" col-12 btn btn-danger btn-md" data-toggle="modal" data-target="#deleteProductModal<?= $products->id ?>">Suppression du produit</button>
                    <div class="modal fade"  id="deleteProductModal<?= $products->id ?>" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Suppression du produit</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Êtes-vous sûr de vouloir supprimer ce produit?</p>                
                                </div>
                                <div class="modal-footer">
                                    <form method="POST" action="?idRemove=<?= $products->id ?>">
                                        <input type="submit" class ="btn btn-danger" name="deleteProduct" value="Suppression du produit" />
                                    </form>
                                    <input type="submit" value="Annuler" data-dismiss="modal" />
                                </div>
                            </div>

                        </div>
                    </div>
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
<?php } ?>
<?php include 'views/footer.php'; ?>
</body>
</html>