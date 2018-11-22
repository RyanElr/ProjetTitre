<?php
session_start();
include_once 'configuration.php';
include'controller/deliveryCtrl.php';
include'views/header.php';
?>
<body><?php if (isset($_SESSION['isConnect'])) { ?>
        <?php if (isset($_POST['deliveryRegister']) && (count($formError) === 0)) { ?> 
            <div class="container-fluid" id="FormNewPatientContent">
                <div id="infoBoxShadow">
                    <div class="alert" id="allUsersProfil">
                        <p>Adresse de livraison bien enregistrée</p>
                        <?php foreach($getDeliveryList as $deliveryAddress){ ?>
                        <p><?= $deliveryAddress->city ?></p>
                       <?php } ?>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <form action="#" method="POST">
                <div class="container-fluid" id="FormNewPatientContent">
                    <div class="form-group has-error">
                        <label for="address"><?= REGISTER_ADDRESS ?></label>
                        <input type="address" name="address" id="address"/>
                        <p class="text-danger"><?= isset($formError['address']) ? $formError['address'] : ''; ?></p>
                        <label for="city"><?= REGISTER_CITY ?></label>
                        <input type="city" name="city" id="city"/>
                        <p class="text-danger"><?= isset($formError['city']) ? $formError['city'] : ''; ?></p>
                        <label for="postalCode"><?= REGISTER_POSTALCODE ?></label>
                        <input type="postalCode" name="postalCode" id="postalCode"/>
                        <p class="text-danger"><?= isset($formError['postalCode']) ? $formError['postalCode'] : ''; ?></p>
                        <input type="submit" value="<?= REGISTER_SUBMIT ?>" name="deliveryRegister" />
                    </div>
                </div>
            </form>
            <?= $message ?>
        <?php }
    } else { ?>
        <div class="container">
            <div id="infoBoxShadow">
                <div class="alert" id="allUsersProfil">
                    <h1>Vous devez être connecté.</h1>
                </div>
            </div>
        </div>
    <?php } ?>
<?php include 'views/footer.php'; ?>
</body>
</html>