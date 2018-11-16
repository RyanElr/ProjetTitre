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
                    <input type="submit" value="Supprimer" name="submit" />
                </form>
            </div>
                <?php } ?>
    <?php } else {
    ?>
    <div id="infoBoxShadow">
        <div class="alert" id="allUsersProfil">
            <h1>Vous n'avez pas les droits d'administrateur.</h1>
        </div>
    </div>
<?php }  ?>
</div>
<?php include 'views/footer.php' ?>