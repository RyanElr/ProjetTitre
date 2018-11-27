<?php
$user = new users();
$userList = $user->getUserProfil();
$delivery = NEW delivery();
$getDeliveryList = $delivery->getDeliveryAddressByClient();
$message = '';
$regexPhoneNumber = '/^[0][1-9][0-9]{8}$/';
$regexPostalCode = '/^[0-9]{5}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z]+$/';
$regexNumber = '/^[0-9]+$/';
$formError = array();
if (isset($_POST['deliveryRegister'])) {
    // Vérification de l'adresse postal celon la regex
    if (!empty($_POST['address'])) {
        if (preg_match($regexAddress, $_POST['address'])) {
            $delivery->address = htmlspecialchars($_POST['address']);
        } else {
            $formError['address'] = 'La saisie de votre adresse est invalide';
        }
    } else {
        $formError['address'] = 'Veuillez indiquer votre adresse';
    }
    // Vérification du code postal celon la regex
    if (!empty($_POST['postalCode'])) {
        if (preg_match($regexPostalCode, $_POST['postalCode'])) {
            $delivery->postalCode = htmlspecialchars($_POST['postalCode']);
        } else {
            $formError['postalCode'] = 'La saisie de votre code postale est invalide';
        }
    } else {
        $formError['postalCode'] = 'Veuillez indiquer votre code postal';
    }
    if (!empty($_SESSION['id'])) {
        if (preg_match($regexNumber, $_SESSION['id'])) {
            $delivery->id_users = htmlspecialchars($_SESSION['id']);
        } else {
            $formError['id'] = 'Erreur';
        }
    } else {
        $formError['id'] = 'Aucune récupération';
    }
    // Vérification de la ville celon la regex
    if (!empty($_POST['city'])) {
        if (preg_match($regexName, $_POST['city'])) {
            $delivery->city = htmlspecialchars($_POST['city']);
        } else {
            $formError['city'] = 'La saisie de votre ville est invalide';
        }
    } else {
        $formError['city'] = 'Veuillez indiquer votre ville';
    }
    // Si tout le formulaire est correct , nous envoyons les données vers la base de données.
    if (count($formError) == 0) {
        $delivery->registerDeliveryAddress();
        if ($delivery->registerDeliveryAddress()) {
            $message = 'SuccessFull';
        } else {
            $message = 'Fail';
        }
    }
}

