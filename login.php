<?php
session_start();
include_once 'configuration.php';
include'controller/connectionCtrl.php';
include'views/header.php';
?>
<body>
    <form action="login.php" method="POST">
        <div class="form-group has-error">
            <label for="mail"><?= FORM_MAIL ?></label>
            <input id="mail" type="text" name="mail"  />
            <p class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : ''; ?></p>
            <label for="password"><?= FORM_PASSWORD ?></label>
            <input type="password" name="password" id="password" />
            <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p>
            <input type="submit" name="connect" id="connect" value="<?= FORM_LOGIN_SUBMIT ?>" />
        </div>
            <p><?= $message?></p>
    </form>
    <?php include 'views/footer.php'; ?>
</body>
</html>
