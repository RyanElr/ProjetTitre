<?php include_once 'controller/panierCtrl.php' ?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?= PANER_TITLE ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if (!isset($_SESSION['isConnect'])) { ?>
                    <p>Veuillez vous connecter pour accéder au panier</p> 
                <?php } else { ?>

                    <div class="dropdown">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Référence :  </th>
                                    <th>Article : </th>
                                    <th>Prix : </th>
                                    <th>Quantité : </th>
                                    <th> Total : </th>
                                </tr>
                            </thead>
                            <tbody class="afficherPanier">
                            </tbody>
                        </table>
                        <p>Total de la commande : <?= $_SESSION['price'] ?> €</p>
                    </div>
                <?php } ?>
            </div>
            <div class="modal-footer">
                <?php if (!isset($_SESSION['isConnect'])) { ?>
                    <a href="../login.php"><button type="button" class="btn btn-default"><?= PANER_NOTCONNECTED ?></button></a>
                <?php } else { ?>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?= PANER_CONTINUE ?></button>
                <?php } ?>

            </div>
        </div>
        </li>
    </div>
</div>
