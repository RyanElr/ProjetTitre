<?php

if (!empty($_GET['cat'])) {
    $product = new produits();
    $product->id_DFD54Z_categories = $_GET['cat'];
    if (!empty($_GET['cat']) && !empty($_GET['typ'])) {
        $product->id_DFD54Z_categories = $_GET['cat'] ;
        $product->id_DFD54Z_types = $_GET['typ'];
        $productList = $product->getProductsListByCategoryAndType();
    } else {
        $productList = $product->getProductsListByCategory();
    }
}
