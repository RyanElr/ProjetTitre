<div class="modal fade"  id="deleteProfilModal<?= $usersProfil->id ?>" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Suppression de l'utilisateur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir supprimer cet utilisateur?</p>                
            </div>
            <div class="modal-footer">
                <form method="POST" action="?idRemove=<?= $usersProfil->id ?>">
                    <input type="submit" class ="btn btn-danger" name="submit" value="Suppression du compte" />
                </form>
                <input type="submit" value="Annuler" data-dismiss="modal" />
            </div>
        </div>

    </div>
</div>