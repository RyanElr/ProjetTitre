<?php
// Paramètre d'URL permettant de récupérer la catégorie du produit
if (!empty($_GET['cat'])) {
    $product = new produits();
    $product->id_categories = $_GET['cat'];
    // Paramètre permettant de récupérer la catégorie et le type du produit
    if (!empty($_GET['cat']) && !empty($_GET['typ'])) {
        $product->id_categories = $_GET['cat'] ;
        $product->id_types = $_GET['typ'];
        // Si on récupère bien les 2 on les affiche
        $productList = $product->getProductsListByCategoryAndType();
    } else {
        // Sinon on affiche que par catégorie
        $productList = $product->getProductsListByCategory();
    }
}
// Paramètre d'URL permettant de rechercher un produit par son nom
if (isset($_POST['search'])){
    $product = new produits();
        $product->search = $_POST['search'];
        $productList = $product->searchProducts();
    }
   

    