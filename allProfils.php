<?php
session_start();
include_once 'configuration.php';
include_once 'controller/allProfilsCtrl.php';
include_once 'views/header.php';
?>   
<?php if (isset($_SESSION['isConnect']) && isset($_SESSION['userType']) && $_SESSION['userType'] == 1) { ?>
    <div class="container">
        <div id="infoBoxShadow">
            <h1>Tout les profils</h1>
        </div>
        <?php foreach ($getAllUsersProfil as $usersProfil) { ?>
            <div class="alert" id="allUsersProfil">
                <p><?= $usersProfil->lastname ?></p>
                <p><?= $usersProfil->firstname ?></p>
                <form method="POST" action="?idRemove=<?= $usersProfil->id ?>">
                    <input class ="btn btn-danger" type="submit" value="Supprimer" name="submit" />
                </form>
                <button type="button" class="btn btn-default" id="modifUserType" data-toggle="modal" data-target="#userRoleModal<?= $usersProfil->id ?>">Modifier</button>
                <div class="modal fade bd-example-modal-lg" id="userRoleModal<?= $usersProfil->id ?>" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modification de l'utilisateur</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <form class="col-md-6" id="formModifUser" action="?idChange=<?= $usersProfil->id ?>" method="POST">

                                            <!--Phone Number input -->
                                            <div class="form-group col-md-6">
                                                <select name="userType">
                                                    <option disabled="Type" selected>Rôle</option>
                                                    <option name="userType" value="2" >2 : Client</option>
                                                    <option name="userType" value="3" >3 : Modérateur</option>
                                                </select>
                                            </div>

                                            <!--Email input -->
                                            <input type="submit" class="btn btn-primary btn-md" id="btn-form" name="modifRole" value="Modification de l'utilisateur" />
                                    </form>
                                            <div class="form-group col-md-6">
                                                <p>Id rôle : <?= $usersProfil->userType ?></p>
                                            </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button id="btnDismiss" type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php } ?>
        </div>
<?php } else if (isset($_SESSION['isConnect']) && isset($_SESSION['userType']) && $_SESSION['userType'] == 3) { ?>
    <div class="container">
        <div id="infoBoxShadow">
            <h1>Tout les profils</h1>
        </div>
        <?php foreach ($getAllUsersProfil as $usersProfil) { ?>
            <div class="alert" id="allUsersProfil">
                <p><?= $usersProfil->lastname ?></p>
                <p><?= $usersProfil->firstname ?></p>
                <form method="POST" action="?idRemove=<?= $usersProfil->id ?>">
                    <input type="submit" value="Supprimer" name="submit" />
                </form>
            </div>
        </div>
    <?php }
} else {
    ?>
    <div class="container">
        <div id="infoBoxShadow">
            <div class="alert" id="allUsersProfil">
                <h1>Vous n'avez pas les droits d'administrateur.</h1>
            </div>
        </div>
    </div>
<?php } ?>
<?php include 'views/footer.php' ?>