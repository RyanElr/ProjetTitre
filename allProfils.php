<?php
session_start();
include_once 'configuration.php';
include_once 'controller/allProfilsCtrl.php';
include_once 'views/header.php';
?>   
<!-- Si l'utilisateur est connecté et qu'il est administrateur il peut modifier et supprimer un utilisateur quelconque-->
<?php if (isset($_SESSION['isConnect']) && isset($_SESSION['userType']) && $_SESSION['userType'] == 1) { ?>
    <div class="container">
        <div id="infoBoxShadow">
            <h1>Tout les profils</h1>
        </div>
        <!-- Boucle permettant d'afficher les informations de chaque utilisateur-->
        <?php foreach ($getAllUsersProfil as $usersProfil) { ?>
            <div class="alert" id="allUsersProfil">
                <div class="row">
                <?php
                $role = $usersProfil->userType;
                if ($role == 2) {
                    ?>
                    <div class="col-12"><p><?= $usersProfil->lastname ?></p></div>
                    <div class="col-12"><p><?= $usersProfil->firstname ?></p></div>
                   <div class="col-12"> <p>Client</P></div>
                <?php } if ($role == 3) { ?>
                    <div class="col-12"><p><?= $usersProfil->lastname ?></p></div>
                    <div class="col-12"><p><?= $usersProfil->firstname ?></p></div>
                    <div class="col-12"><p>Modérateur</p></div>
                <?php } ?>
                </div>
                    <div class="row">
                <button type="button" id="deleteBtn" class="col-12 btn btn-danger btn-md" data-toggle="modal" data-target="#deleteProfilModal<?= $usersProfil->id ?>">Supprimer</button>
                    
                <?php include 'modal/modalDeleteEachProfil.php' ?>
                <!-- Modal permettant la modification du rôle d'un utilisateur -->
                <button type="button" class="col-12 btn btn-primary btn-md" id="modifUserType" data-toggle="modal" data-target="#userRoleModal<?= $usersProfil->id ?>">Modifier</button>
                </div>
                <?php include 'modal/modalModifAllPrfl.php'; ?>
            </div>
        <?php } ?>
    </div>
    <!-- Si l'utilisateur est connecté et qu'il est modérateur il peut supprimer un client-->
<?php } else if (isset($_SESSION['isConnect']) && isset($_SESSION['userType']) && $_SESSION['userType'] == 3) { ?>
    <div class="container">
        <div id="infoBoxShadow">
            <h1>Tout les profils</h1>
        </div>
        <!-- Boucle permettant d'afficher les informations de chaque client-->
        <?php foreach ($getAllUsersProfil as $usersProfil) { ?>
            <div class="alert" id="allUsersProfil">
                <p><?= $usersProfil->lastname ?></p>
                <p><?= $usersProfil->firstname ?></p>
                <div class="row">
                <button type="button" id="deleteBtn" class="col-12 btn btn-danger btn-md" data-toggle="modal" data-target="#deleteProfilModal<?= $usersProfil->id ?>">Supprimer</button>
                </div>
                <?php include 'modal/modalDeleteEachProfil.php' ?>
            </div>
        <?php }
        ?>
    </div>
    <!-- Sinon il n'a aucun droit -->
<?php } else { ?>
    <div class="container">
        <div id="infoBoxShadow">
            <div class="alert" id="allUsersProfil">
                <h1>Vous n'avez pas les droits d'administrateur.</h1>
            </div>
        </div>
    </div>
    <?php include 'views/footer.php' ?>
<?php } ?>
