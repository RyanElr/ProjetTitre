<?php
$user = NEW users();
$getAllUsersProfil = $user->getAllUsersProfil();
if (isset($_POST['submit'])) {
//Condition de vérification pour l'id
    if (isset($_GET['idRemove'])) {
        $user->id = $_GET['idRemove'];
        //Utilisation de la méthode de suppression
        $removeEachUser = $user->removeUser();
    }
}
