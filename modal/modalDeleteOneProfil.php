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

        </div>
    </div>