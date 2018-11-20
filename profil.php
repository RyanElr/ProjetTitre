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

        <!--Modal de suppression de compte -->

        <button type="button" class ="btn btn-danger" id="removeUser">Supprimer le compte</button>
        <div class="modal fade" id="userModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Suppression de compte</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de vouloir supprimer votre compte?</p>                
                    </div>
                    <div class="modal-footer">
                        <form method="POST" action="?idRemove=<?= $user->id ?> ?disconnect">
                            <input class="btn btn-danger" type="submit" value="Supprimer" name="submit" />
                        </form>
                        <input type="submit" value="Annuler" data-dismiss="modal" />
                    </div>
                </div>
                </li>
            </div>
        </div>

        <!--Modification du compte-->

        <button type="button" class="btn grey" id="modifUser">Modifier</button>
        <div class="modal fade bd-example-modal-lg" id="userModifModal" role="dialog">
            <div class="modal-dialog modal-lg">

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
                                <form class="col-md-6" id="formModifUser" action="#" method="POST">

                                    <!--Phone Number input -->
                                    <div class="form-group col-md-6">
                                        <label for="phone"><?= REGISTER_PHONENUMBER ?></label>
                                        <input id="phone" name="phone" value="<?= $user->phone ?>" />
                                        <p class="text-danger"><?= isset($formError['phone']) ? $formError['phone'] : ''; ?></p>
                                    </div>

                                    <!--Email input -->
                                    <div class="form-group col-md-6">
                                        <label for="mail"><?= REGISTER_MAIL ?></label>
                                        <input id="mail" type="text" name="mail" value="<?= $user->mail ?>" />
                                        <p class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : ''; ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="submit" class="btn btn-primary btn-md" id="btn-form" name="modifUser" value="Modification de l'utilisateur" />
                                    </div>
                                </form>
                                <form class="col-6" id="formModifUser" action="#" method="POST">
                                    <div class="form-group col-md-6">
                                        <label for="oldPassword"><?= REGISTER_OLDPASSWORD ?></label>
                                        <input type="password"  id="oldPassword" name="oldPassword"/>
                                        <p class="text-danger"><?= isset($mdpError['oldPassword']) ? $mdpError['oldPassword'] : ''; ?></p>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password"><?= REGISTER_PASSWORD ?></label>
                                        <input type="password" name="password" id="password" />
                                        <p class="text-danger"><?= isset($mdpError['password']) ? $mdpError['password'] : ''; ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="passwordVerify"><?= REGISTER_PASSWORD_VERIFY ?></label>
                                        <input type="password" name="passwordVerify" id="passwordVerify" />
                                        <p class="text-danger"><?= isset($mdpError['password']) ? $mdpError['password'] : ''; ?></p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="submit" class="btn btn-primary btn-md" id="btn-form" name="modifPassword" value="Modification du mot de passe" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btnDismiss" type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin modif Client -->
    </div>
</div>
<?php include_once 'views/footer.php'; ?>