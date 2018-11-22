<?php

if (!empty($_GET['cat'])) {
    $product = new produits();
    $product->id_categories = $_GET['cat'];
    if (!empty($_GET['cat']) && !empty($_GET['typ'])) {
        $product->id_categories = $_GET['cat'] ;
        $product->id_types = $_GET['typ'];
        $productList = $product->getProductsListByCategoryAndType();
    } else {
        $productList = $product->getProductsListByCategory();
    }
}
if (isset($_POST['search'])){
    $product = new produits();
        $product->search = $_POST['search'];
        $productList = $product->searchProducts();
    }
   

    