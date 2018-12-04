<div class="modal fade"  id="deleteProductModal<?= $products->id ?>" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Suppression du produit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir supprimer ce produit?</p>                
            </div>
            <div class="modal-footer">
                <form method="POST" action="?idRemove=<?= $products->id ?>">
                    <input type="submit" class ="btn btn-danger" name="deleteProduct" value="Suppression du produit" />
                </form>
                <input type="submit" value="Annuler" data-dismiss="modal" />
            </div>
        </div>

    </div>
</div>