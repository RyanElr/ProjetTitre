<?php
include_once 'configuration.php';
include'controller/registerCtrl.php';
include'views/header.php';
?>
<body><?php if (isset($_POST['register']) && (count($formError) === 0)) { ?> 
        <form action="register.php" method="POST">
            <div class="container-fluid" id="FormNewPatientContent">
                <div class="form-group has-error">
                    <p>
                        <select name="civility">
                            <option disabled="Veuillez choisir une civilité" selected>Veuillez choisir une civilité</option>
                            <option>Mr</option>
                            <option>Mme</option>
                        </select>
                    <p class="text-danger"><?= isset($formError['civility']) ? $formError['civility'] : ''; ?></p>
                    </p>
                    <label for="lastname"><?= REGISTER_LASTNAME ?></label>
                    <input id="lastname" type="text" name="lastname" value="<?= isset($lastname) ? $lastname : '' ?>" />
                    <p class="text-danger"><?= isset($formError['lastname']) ? $formError['lastname'] : ''; ?></p>
                    <label for="firstname"><?= REGISTER_FIRSTNAME ?></label>
                    <input id="firstname" type="text" name="firstname" value="<?= isset($firstname) ? $firstname : '' ?>" />
                    <p class="text-danger"><?= isset($formError['firstname']) ? $formError['firstname'] : ''; ?></p>
                    <label for="birthdate"><?= REGISTER_DATE ?></label>
                    <input id="birthdate" type="date" name="birthdate" value="<?= isset($birthdate) ? $birthdate : '' ?>" />
                    <p class="text-danger"><?= isset($formError['birthdate']) ? $formError['birthdate'] : ''; ?></p>
                    <label for="mail"><?= REGISTER_MAIL ?></label>
                    <input id="mail" type="text" name="mail" value="<?= isset($mail) ? $mail : '' ?>" />
                    <p class="text-danger"><?= $message ?></p>
                    <label for="phone"><?= REGISTER_PHONENUMBER ?></label>
                    <input id="phone" name="phone" value="<?= isset($phone) ? $phone : '' ?>" />
                    <p class="text-danger"><?= isset($formError['phone']) ? $formError['phone'] : ''; ?></p>
                    <label for="password"><?= REGISTER_PASSWORD ?></label>
                    <input type="password" name="password" id="password"/>
                    <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p>
                    <label for="passwordVerify"><?= REGISTER_PASSWORD_VERIFY ?></label>
                    <input type="password" name="passwordVerify" id="passwordVerify"/>
                    <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p>
                    <input type="submit" value="<?= REGISTER_SUBMIT ?>" name="register"/>
                </div>
            </div>
        </form>
    <?php } else { ?>
        <form action="register.php" method="POST">
            <div class="container-fluid" id="FormNewPatientContent">
                <div class="form-group has-error">
                    <p>
                        <select name="civility">
                            <option disabled="Veuillez choisir une civilité" selected>Veuillez choisir une civilité</option>
                            <option>Mr</option>
                            <option>Mme</option>
                        </select>
                    <p class="text-danger"><?= isset($formError['civility']) ? $formError['civility'] : ''; ?></p>
                    </p>
                    <label for="lastname"><?= REGISTER_LASTNAME ?></label>
                    <input id="lastname" type="text" name="lastname" value="<?= isset($lastname) ? $lastname : '' ?>" />
                    <p class="text-danger"><?= isset($formError['lastname']) ? $formError['lastname'] : ''; ?></p>
                    <label for="firstname"><?= REGISTER_FIRSTNAME ?></label>
                    <input id="firstname" type="text" name="firstname" value="<?= isset($firstname) ? $firstname : '' ?>" />
                    <p class="text-danger"><?= isset($formError['firstname']) ? $formError['firstname'] : ''; ?></p>
                    <label for="birthdate"><?= REGISTER_DATE ?></label>
                    <input id="birthdate" type="date" name="birthdate" value="<?= isset($birthdate) ? $birthdate : '' ?>" />
                    <p class="text-danger"><?= isset($formError['birthdate']) ? $formError['birthdate'] : ''; ?></p>
                    <label for="mail"><?= REGISTER_MAIL ?></label>
                    <input id="mail" type="text" name="mail" value="<?= isset($mail) ? $mail : '' ?>" />
                    <p class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : ''; ?></p>
                    <label for="phone"><?= REGISTER_PHONENUMBER ?></label>
                    <input id="phone" name="phone" value="<?= isset($phone) ? $phone : '' ?>" />
                    <p class="text-danger"><?= isset($formError['phone']) ? $formError['phone'] : ''; ?></p>
                    <label for="password"><?= REGISTER_PASSWORD ?></label>
                    <input type="password" name="password" id="password"/>
                    <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p>
                    <label for="passwordVerify"><?= REGISTER_PASSWORD_VERIFY ?></label>
                    <input type="password" name="passwordVerify" id="passwordVerify"/>
                    <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p>
                    <input type="submit" value="<?= REGISTER_SUBMIT ?>" name="register"/>
                </div>
            </div>
        </form>
    <?php } ?>
    <?php include 'views/footer.php'; ?>
</body>
</html>