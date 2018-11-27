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
                                    <option name="userType" value="2" >Client</option>
                                    <option name="userType" value="3" >Modérateur</option>
                                </select>
                            </div>

                            <!--Email input -->
                            <input type="submit" class="btn btn-primary btn-md" id="btn-form" name="modifRole" value="Modification de l'utilisateur" />
                        </form>
                        <div class="form-group col-md-6">
                            <?php
                            $role = $usersProfil->userType;
                            if ($role == 2) {
                                ?>
                                <p>Client</P>
                            <?php } if ($role == 3) { ?>
                                <p>Modérateur</p>
                            <?php } ?>
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

