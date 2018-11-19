<?php

if (!empty($_GET['id'])) {
    $user = new users();
    $user->id = $_GET['id'];
    $userProfil = $user->getUserProfil();
}
if (isset($_POST['submit'])) {
    $user = new users();
//Condition de vérification pour l'id
    if (isset($_GET['idRemove'])) {
        $user->id = $_GET['idRemove'];
        //Utilisation de la méthode de suppression
        $removeUser = $user->removeUser();
        if ($user->removeUser()) {
            session_unset();
            session_destroy();
            header('Location:index.php');
            exit;
        }
    }
}
$regexPhoneNumber = '/^[0][1-9][0-9]{8}$/';
$regexPostalCode = '/^[0-9]{5}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z]+$/';
$formError = array();
if (isset($_POST['modifUser'])) {
    $user = NEW users();
      $user->id = $_GET['id'];
      // Vérification de l'adresse celon la regex
    if (!empty($_POST['address'])) {
        if (preg_match($regexAddress, $_POST['address'])) {
            $user->address = htmlspecialchars($_POST['address']);
        } else {
            $formError['address'] = 'La saisie de votre adresse est invalide';
        }
    } else {
        $formError['address'] = 'Veuillez indiquer votre adresse';
    }
    // Vérification du code Postal celon la regex
    if (!empty($_POST['postalCode'])) {
        if (preg_match($regexPostalCode, $_POST['postalCode'])) {
            $user->postalCode = htmlspecialchars($_POST['postalCode']);
        } else {
            $formError['postalCode'] = 'La saisie de votre code postale est invalide';
        }
    } else {
        $formError['postalCode'] = 'Veuillez indiquer votre code postal';
    }
    // Vérification du numéro de téléphone celon la regex
    if (!empty($_POST['phone'])) {
        if (preg_match($regexPhoneNumber, $_POST['phone'])) {
            $user->phone = htmlspecialchars($_POST['phone']);
        } else {
            $formError['phone'] = 'La saisie de votre numéro de téléphone est invalide';
        }
    } else {
        $formError['phone'] = 'Veuillez indiquer votre numéro de téléphone';
    }
    // Vérification de l'adresse mail celon la regex
    if (!empty($_POST['mail'])) {
        if (preg_match($regexMail, $_POST['mail'])) {
            $user->mail = htmlspecialchars($_POST['mail']);
        } else {
            $formError['mail'] = 'La saisie de votre mail est invalide';
        }
    } else {
        $formError['mail'] = 'Veuillez indiquer votre mail';
    }
    // Vérification de la ville celon la regex
    if (!empty($_POST['city'])) {
        if (preg_match($regexName, $_POST['city'])) {
            $user->city = htmlspecialchars($_POST['city']);
        } else {
            $formError['city'] = 'La saisie de votre ville est invalide';
        }
    } else {
        $formError['city'] = 'Veuillez indiquer votre ville';
    }
    // Vérification du mot de passe
    if (!empty($_POST['password']) && !empty($_POST['passwordVerify']) && $_POST['password'] == $_POST['passwordVerify']) {
        $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //si les champs sont vides ou s'il ne sont pas identiques affichage d'un message d'erreur
    } else {
        $formError['password'] = 'Veuillez vérifier votre mot de passe';
    }
    if (count($formError) == 0 ){
    $modifUser = $user->modifyUser();
    if ($user->modifyUser()){
    header('Location:index.php');
    }
    }
}
