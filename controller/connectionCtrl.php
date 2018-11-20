<?php
$mail = '';
$message = '';
$formError = array();
// Vérification de l'adresse mail de connexion.
if (isset($_POST['connect'])) {
    if (!empty($_POST['mail'])) {
        $mail = htmlspecialchars($_POST['mail']);
    } else {
        $formError['mail'] = 'Veuillez entrer votre adresse mail';
    }
// Vérification du mot de passe de connexion.
    if (!empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $formError['password'] = 'Veuillez entrer votre mot de passe';
    }
// Si tout est bon, nous nous connectons au compte utilisateur.
    if (count($formError) == 0) {
        $user = new users();
        $user->mail = $mail;
        if ($user->userConnection()) {
            if (password_verify($password, $user->password)) {
                //Si la connexion s'est faite
                $message = USER_CONNECTION_SUCCESS;
                //On rempli la session avec les attributs de l'objet issus de l'hydratation
                $_SESSION['mail'] = $user->mail;
                $_SESSION['lastname'] = $user->lastname;
                $_SESSION['firstname'] = $user->firstname;
                $_SESSION['phone'] = $user->phone;
                $_SESSION['id'] = $user->id;
                $_SESSION['userType'] = $user->userType;
                $_SESSION['isConnect'] = true;
                header('Location:index.php');
            }
            else {
                $message = USER_CONNECTION_ERROR;
            }
        }
    }
}
