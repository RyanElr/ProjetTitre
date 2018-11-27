<?php
session_start();
include_once 'configuration.php';
include_once 'controller/profilCtrl.php';
include_once 'views/header.php';
?>   
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
        $role = $user->userType;
        if ($role == 2) {
            ?>
            <p>Client</P>
        <?php } if ($role == 3) { ?>
            <p>Modérateur</p>
        <?php } if ($role == 1) { ?>
            <p>Administrateur</p>
<?php } ?>
        <!--Modal de suppression de compte -->
        <?php if (isset($_SESSION['userType']) && $_SESSION['userType'] != 1) {
            include 'modal/modalDeleteOneProfil.php';
            } ?>
        <!--Modification du compte-->
<?php include 'modal/modalModifPrfl.php'; ?>
        <!-- Fin modif Client -->
    </div>
</div>
<?php include_once 'views/footer.php'; ?>