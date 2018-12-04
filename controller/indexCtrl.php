<?php
$product = new produits();
// Méthode permettant de récupérer tout les produits que l'on veut afficher en première page
$productsList = $product->getBestSellersList();