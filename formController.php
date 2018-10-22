<?php

// declaration des regex
$regexPhone = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexText = '/^[0-9a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!\']+$/';
// declaration du tableaux d'erreur
$formError = array();

// verification du nom si existant
if (isset($_POST['your-name'])) {
    // Déclaration de la variable $name avec HTMLspecialchars afin d'interpréter les balises HTML
    $name = htmlspecialchars($_POST['your-name']);
    // test de la regex si valide
    if (!preg_match($regexName, $name)) {
        // stockage de l'erreur dans le tableau formError
        $formError['your-name'] = 'Nom invalide';
    }
    // verification si le champ est vide
    if (empty($name)) {
        // stockage de l'erreur dans le tableau formError
        $formError['your-name'] = 'Nom obligatoire';
    }
}

// verification de l'email si existante
if (isset($_POST['your-email'])) {
    // Déclaration de la variable $name avec HTMLspecialchars afin d'interpréter les balises HTML
    $mail = htmlspecialchars($_POST['your-email']);
    // verification si l'address mail est valide
    if (!FILTER_VAR($mail, FILTER_VALIDATE_EMAIL)) {
        // stockage de l'erreur dans le tableau formError
        $formError['your-email'] = 'Adresse mail invalide';
    }
    // verification si le champ est vide
    if (empty($mail)) {
        // stockage de l'erreur dans le tableau formError
        $formError['your-email'] = 'Addresse mail obligatoire';
    }
}

// verification du numéro de telephone si existant
if (isset($_POST['your-tel-615'])) {
    // Déclaration de la variable $phoneNumb avec HTMLspecialchars afin d'interpréter les balises HTML
    $phoneNumb = htmlspecialchars($_POST['your-tel-615']);
    // test de la regex si valide
    if (!preg_match($regexPhone, $phoneNumb)) {
        // stockage de l'erreur dans le tableau formError
        $formError['your-tel-615'] = 'Numéro de téléphone est invalide';
    }
    // verification si le champ est vide
    if (empty($phoneNumb)) {
        // stockage de l'erreur dans le tableau formError
        $formError['your-tel-615'] = 'Numéro de téléphone obligatoire';
    }
}

// verification du sujet si existant
if (isset($_POST['your-subject'])) {
    // Déclaration de la variable $subjet avec HTMLspecialchars afin d'interpréter les balises HTML
    $subjet = htmlspecialchars($_POST['your-subject']);
    // test de la regex si valide
    if (!preg_match($regexText, $subjet)) {
        // stockage de l'erreur dans le tableau formError
        $formError['your-subject'] = 'Subjet invalide';
    }
}

// verification de la ville
if (isset($_POST['your-ville'])) {
    // Déclaration de la variable $subjet avec HTMLspecialchars afin d'interpréter les balises HTML
    $city = htmlspecialchars($_POST['your-ville']);
    // test de la regex si valide
    if (!preg_match($regexText, $city)) {
        // stockage de l'erreur dans le tableau formError
        $formError['your-ville'] = 'Ville invalide';
    }
}
