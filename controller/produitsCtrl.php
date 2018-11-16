<?php
if(!empty($_GET['cat'])){
    $product = new produits();
    $product->id_DFD54Z_categories = $_GET['cat'];
    $productList = $product->getProductsListByCategory();
    if(!empty($_GET['typ'])){
        $product->id_DFD54Z_types = $_GET['typ'];
        $productList = $product->getProductsListByType();
    }
}