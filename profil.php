<?php
session_start();
include_once 'configuration.php';
include_once 'controller/profilCtrl.php';
include_once 'views/header.php';
?> 
<!-- Si l'utilisateur est connecté -->
<?php if (isset($_SESSION['isConnect'])) { ?>
    <!-- On affiche le profil -->
    <div class="container">
        <div id="infoBoxShadow">
            <h1>Votre profil</h1>
        </div>
        <div class="alert" id="newUser">
            <p><?= $user->lastname ?></p>
            <p><?= $user->firstname ?></p>
            <p><?= $user->birthdate ?></p>
            <p><?= $user->mail ?></p>
            <p><?= $user->phone ?></p>
            <p><?= $user->address ?></p>
            <p><?= $user->postalCode ?></p>
            <p><?= $user->city ?></p>
            <?php
            // La variable $role contient l'id de l'utilisateur.
            $role = $user->userType;
            // Si l'id de l'utilisateur est le numéro 2, c'est un client
            if ($role == 2) {
                ?>
                <p>Client</P>
            <?php } // Si l'id de l'utilisateur est le numéro 2, c'est un modérateur
            if ($role == 3) {
                ?>
                <p>Modérateur</p>
            <?php } // Si l'id de l'utilisateur est le numéro 1, c'est un administrateur
            if ($role == 1) {
                ?>
                <p>Administrateur</p>
            <?php } ?>
            <!--Modal de suppression de compte -->

            <?php
            include 'modal/modalModifPrfl.php';
            ?>
            <?php
            // Si l'utilisateur est connecté et que son n'id n'est pas l'id de l'administrateur.
            if (isset($_SESSION['isConnect']) && isset($_SESSION['userType']) && $_SESSION['userType'] != 1) {
                // On lui permets de pouvoir supprimer son propre profil à partir d'une modal.
                include 'modal/modalDeleteOneProfil.php';
            }
            ?>
            <!-- Fin modif Client -->
        </div>
    </div>
<?php } else { ?>
    <!-- Si il n'est pas connecté un message est affiché décrivant que l'utilisateur doit être connecté. -->
    <div class="container">
        <div id="infoBoxShadow">
            <h1>Vous devez être connecter pour avoir accès à votre profil</h1>
        </div>
    </div>
<?php } ?>
<?php
// Si l'utilisateur n'est pas connecté , ou si il est connecté mais que son ID est égal à celui du client.
if (!isset($_SESSION['isConnect']) || isset($_SESSION['isConnect']) && isset($_SESSION['userType']) && $_SESSION['userType'] == 2) {
    // On lui affiche le footer.
    include_once 'views/footer.php';
}
?>