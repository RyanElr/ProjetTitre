<?php
session_start();
include_once 'configuration.php';
include_once 'model/model.php';
include_once 'controller/newProductsCtrl.php';
include_once 'views/header.php';?>
<?php if (isset($_SESSION['isConnect']) && isset($_SESSION['userType']) && $_SESSION['userType'] == 1) { ?>
 <form action="#" method="POST">
            <div class="container-fluid" id="FormNewPatientContent">
                <div class="form-group has-error">    
                        <select name="category">
                            <option disabled="Catégorie" selected>Catégorie</option>
                            <option name="category" value="<?= isset($category) ? $category : '' ?>" >Luminaire</option>
                            <option name="category" value="<?= isset($category) ? $category : '' ?>" >Figurine</option>
                        </select>
                        <p class="text-danger"><?= isset($formError['category']) ? $formError['category'] : ''; ?></p>
                        <select name="type">
                            <option disabled="Type" selected>Type</option>
                            <option name="type" value="<?= isset($type) ? $type : '' ?>" >Dragon Ball</option>
                            <option name="type" value="<?= isset($type) ? $type : '' ?>" >Naruto</option>
                            <option name="type" value="<?= isset($type) ? $type : '' ?>" >One Piece</option>
                        </select>
                        <p class="text-danger"><?= isset($formError['type']) ? $formError['type'] : ''; ?></p> 
                    <label for="title">Titre : </label>
                    <input id="title" type="text" name="title" value="<?= isset($title) ? $title : '' ?>" />
                    <p class="text-danger"><?= isset($formError['title']) ? $formError['title'] : ''; ?></p>
                    <label for="price">Prix : </label>
                    <input id="price" type="text" name="price" value="<?= isset($price) ? $price : '' ?>" />
                    <p class="text-danger"><?= isset($formError['price']) ? $formError['price'] : ''; ?></p>
                    <label for="imgUrl">Image : </label>
                    <input id="imgUrl" type="file" name="imgUrl" value="<?= isset($imgUrl) ? $imgUrl : '' ?>" />
                    <p class="text-danger"><?= isset($formError['imgUrl']) ? $formError['imgUrl'] : ''; ?></p>
                    <input type="submit" value="<?= REGISTER_SUBMIT ?>" name="register"/>
                </div>
            </div>
        </form>
<?php } else { ?>
    <div id="infoBoxShadow">
        <div class="alert" id="allUsersProfil">
            <h1>Vous n'avez pas les droits d'administrateur.</h1>
        </div>
    </div>
<?php } ?>
<?php include_once 'views/footer.php'; ?>
