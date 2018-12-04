<div class="modal fade bd-example-modal-lg" id="modifProductModal<?= $products->id ?>" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modification du produit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <form class="col-md-6" id="formModifUser" action="?idChange=<?= $products->id ?>" method="POST">
                            <div class="form-group col-md-6">
                                <select name="category">
                                    <option disabled="Catégorie" selected>Catégorie</option>
                                    <option name="category" value="1" >Luminaire</option>
                                    <option name="category" value="2" >Figurine</option>
                                </select>
                            </div>
                            <p class="text-danger"><?= isset($formError['category']) ? $formError['category'] : ''; ?></p>
                            <div class="form-group col-md-6">
                                <select name="type">
                                    <option disabled="Type" selected>Type</option>
                                    <option name="type" value="1" >Dragon Ball</option>
                                    <option name="type" value="2" >Naruto</option>
                                    <option name="type" value="3" >One Piece</option>
                                </select>
                            </div>
                            <!--Phone Number input -->
                            <div class="form-group col-md-6">
                                <label for="title">Titre</label>
                                <input id="title" name="title" value="<?= $products->title ?>" />
                                <p class="text-danger"><?= isset($formError['title']) ? $formError['title'] : ''; ?></p>
                            </div>

                            <!--Email input -->
                            <div class="form-group col-md-6">
                                <label for="price">Prix</label>
                                <input id="price" type="text" name="price" value="<?= $products->price ?>" />
                                <p class="text-danger"><?= isset($formError['price']) ? $formError['price'] : ''; ?></p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="imgUrl">Image : </label>
                                <input id="imgUrl" type="file" name="imgUrl" value="<?= $products->imgUrl ?>" />
                                <p class="text-danger"><?= isset($formError['imgUrl']) ? $formError['imgUrl'] : ''; ?></p>
                            </div>
                            <!--Email input -->
                            <input type="submit" class="btn btn-primary btn-md" id="btn-form" name="modifProduct" value="Modification du produit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
