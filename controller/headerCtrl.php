<?php
if (isset($_GET['action'])) {
    //Si on veut se déconnecter
    if ($_GET['action'] == 'disconnect') {
        //destruction de la session
        session_destroy();
        //redirection de la page vers l'index
        header('location:index.php');
    }
}

if (isset($_GET['page'])) {
    $page = intval(htmlspecialchars($_GET['page']));
} else {
    $page = 1;
}

$produit = new produits();
    $_SESSION['price'] = $produit->price;

if (!empty($_GET['userType'])) {
    $user = new users();
    $_SESSION['userType'] = $user->userType;
    $user->userType = $_GET['userType'];
    $userProfil = $user->getUserProfil();
}
//Langue française par défault
include_once 'lang/FR_FR.php';
