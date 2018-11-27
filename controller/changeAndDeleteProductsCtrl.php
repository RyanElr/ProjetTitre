<?php

$product = new produits();
$productList = $product->getProductsListWithCategoriesAndTypes();
if (isset($_POST['deleteProduct'])) {
//Condition de vérification pour l'id
    if (isset($_GET['idRemove'])) {
        $product->id = $_GET['idRemove'];
        //Utilisation de la méthode de suppression
        $removeEachProduct = $product->removeProduct();
        if ($product->removeProduct()) {
            header('location:#');
        }
    }
}
if (isset($_POST['search'])) {
    $product = new produits();
    $product->search = $_POST['search'];
    $productList = $product->searchProducts();
}
$regexPhoneNumber = '/^[0][1-9][0-9]{8}$/';
$regexPostalCode = '/^[0-9]{5}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexImg = '/^[A-z0-9._%+-]+[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z]+$/';
$regexNumber = '/^[0-9]+$/';
$regexNumberPrice = '/^[0-9]*.[0-9]{2}+$/';
$formError = array();
$mdpError = array();
if (isset($_POST['modifProduct'])) {
    $product->id = $_GET['idChange'];
    // Vérification du numéro de téléphone celon la regex
    if (!empty($_POST['title'])) {
        if (preg_match($regexName, $_POST['title'])) {
            $product->title = htmlspecialchars($_POST['title']);
        } else {
            $formError['title'] = 'La saisie du titre est invalide';
        }
    } else {
        $formError['title'] = 'Veuillez indiquer un titre';
    }
    // Vérification du prénom celon la regex
    if (!empty($_POST['price'])) {
        if (preg_match($regexNumberPrice, $_POST['price'])) {
            $product->price = htmlspecialchars($_POST['price']);
        } else {
            $formError['price'] = 'La saisie de votre prix est invalide';
        }
    } else {
        $formError['price'] = 'Veuillez indiquer votre prix';
    }
    // Vérification de l'adresse postal celon la regex
    if (!empty($_POST['imgUrl'])) {
        if (preg_match($regexImg, $_POST['imgUrl'])) {
            $product->imgUrl = htmlspecialchars($_POST['imgUrl']);
        } else {
            $formError['imgUrl'] = 'Le format d\'image est invalide';
        }
    } else {
        $formError['imgUrl'] = 'Veuillez mettre une image';
    }
    if (!empty($_POST['type'])) {
        if (preg_match($regexNumber, $_POST['type'])) {
            $product->id_types = htmlspecialchars($_POST['type']);
        } else {
            $formError['type'] = 'Votre type est invalide';
        }
    } else {
        $formError['type'] = 'Veuillez indiquer le type';
    }
    if (!empty($_POST['category'])) {
        if (preg_match($regexNumber, $_POST['category'])) {
            $product->id_categories = htmlspecialchars($_POST['category']);
        } else {
            $formError['category'] = 'Votre catégorie est invalide';
        }
    } else {
        $formError['category'] = 'Veuillez indiquer la catégorie';
    }
    if (count($formError) == 0) {
        $modifProduct = $product->modifyProduct();
        if ($product->modifyProduct()) {
            header('Location:index.php');
        }
    }
}

