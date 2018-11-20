<?php
$regexPhoneNumber = '/^[0][1-9][0-9]{8}$/';
$regexPostalCode = '/^[0-9]{5}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z]+$/';
$formError = array();
if (isset($_POST['register'])) {
    $user = NEW users();
     // Vérification du nom de famille celon la regex
    if (!empty($_POST['lastname'])) {
        if (preg_match($regexName, $_POST['lastname'])) {
            $user->lastname = htmlspecialchars($_POST['lastname']);
        } else {
            $formError['lastname'] = 'La saisie de votre nom est invalide';
        }
    } else {
        $formError['lastname'] = 'Veuillez indiquer votre nom';
    }
 // Vérification du prénom celon la regex
    if (!empty($_POST['firstname'])) {
        if (preg_match($regexName, $_POST['firstname'])) {
            $user->firstname = htmlspecialchars($_POST['firstname']);
        } else {
            $formError['firstname'] = 'La saisie de votre prénom est invalide';
        }
    } else {
        $formError['firstname'] = 'Veuillez indiquer votre prénom';
    }
     // Vérification de la date de naissance celon la regex
    if (!empty($_POST['birthdate'])) {
        if (preg_match($regexDate, $_POST['birthdate'])) {
            $user->birthdate = htmlspecialchars($_POST['birthdate']);
        } else {
            $formError['birthdate'] = 'La saisie de votre Date de naissance est invalide';
        }
    } else {
        $formError['birthdate'] = 'Veuillez indiquer votre Date de naissance';
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
     // Vérification de la civilité celon la regex
    if (!empty($_POST['civility'])) {
        if (preg_match($regexName, $_POST['civility'])) {
            $user->civility = htmlspecialchars($_POST['civility']);
        } else {
            $formError['civility'] = 'La saisie de votre Civilité est invalide';
        }
    } else {
        $formError['civility'] = 'Veuillez indiquer votre civilité';
    }
     // Vérification du mot de passe
    if (!empty($_POST['password']) && !empty($_POST['passwordVerify']) && $_POST['password'] == $_POST['passwordVerify']) {
        $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        //si les champs sont vides ou s'il ne sont pas identiques affichage d'un message d'erreur
    } else {
        $formError['password'] = 'Veuillez vérifier votre mot de passe';
    }
    // Si tout le formulaire est correct , nous envoyons les données vers la base de données.
    if (count($formError) == 0) {
        if (!$user->userRegister()) {
            $formError['register'] = 'Il y a eu un problème';
        }
    }
}
?>

