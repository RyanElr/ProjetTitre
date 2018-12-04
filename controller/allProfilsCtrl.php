<?php

$user = NEW users();
if (isset($_POST['submit'])) {
//Condition de vérification pour l'id
    if (isset($_GET['idRemove'])) {
        $user->id = $_GET['idRemove'];
        //Utilisation de la méthode de suppression
        $removeEachUser = $user->removeUser();
    }
}
//Si l'utilisateur est connecté et qu'il est administrateur, il cherche tout les profils sauf le sien
if (isset($_SESSION['isConnect']) && isset($_SESSION['userType']) && $_SESSION['userType'] == 1) {
    $getAllUsersProfil = $user->getAllUsersProfilAsAdministrator();
    if (isset($_POST['search'])){
        $user->search = $_POST['search'];
        $getAllUsersProfil = $user->searchUsers();
    }
}
//Si l'utilisateur est connecté et qu'il est modérateur, il cherche le profil de tout les clients seulement
if (isset($_SESSION['isConnect']) && isset($_SESSION['userType']) && $_SESSION['userType'] == 3) {
    $getAllUsersProfil = $user->getAllUsersProfilAsModerator();
    if (isset($_POST['search'])){
        $user->search = $_POST['search'];
        $getAllUsersProfil = $user->searchUsersAsModerator();
    }
}

$regexNumber = '/^[0-9]+$/';
$message = '';
$formError = array();
$mdpError = array();
// Si on appuie sur l'input modif role 
if (isset($_POST['modifRole'])) {
    $user->id = $_GET['idChange'];
    // Vérification du numéro de téléphone celon la regex
    if (!empty($_POST['userType'])) {
        if (preg_match($regexNumber, $_POST['userType'])) {
            $user->userType = htmlspecialchars($_POST['userType']);
        } else {
            $formError['userType'] = 'Votre catégorie est invalide';
        }
    } else {
        $formError['userType'] = 'Veuillez indiquer la catégorie';
    }
    // Si le formulaire n'a aucune erreur , nous permettons la modification du rôle
    if (count($formError) == 0) {
        $modifUserType = $user->modifyRole();
        if ($user->modifyRole()) {
            $message = 'Le rôle de l\'utilisateur a bien été modifier';
        }
        //Nous renvoyons vers la page de tout les profils avec le paramètre d'URL permettant de chercher chaque utilisateur selon son rôle.
        header('Location:allProfils.php?searchPfl');
    }
}
