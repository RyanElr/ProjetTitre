<?php
session_start();
include_once 'configuration.php';
include'controller/connectionCtrl.php';
include'views/header.php';
?>
<body>
    <form action="login.php" method="POST">
        <div class="form-group has-error">
            <label for="mail" class="control-label"><?= FORM_MAIL ?></label>
            <input type="text" name="mail" id="mail"/>
            <p class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : ''; ?></p>
        </div>
        <div class="form-group has-error">
            <label for="password"><?= FORM_PASSWORD ?></label>
            <input type="password" name="password" id="password"/></div>
            <p class="text-danger"><?= isset($formError['password']) ? $formError['password'] : ''; ?></p>
        <div class="form-group has-error">
            <input type="submit" name="connect" id="connect" value="<?= FORM_LOGIN_SUBMIT ?>" />
        </div>
    </form>
    <?php include 'views/footer.php'; ?>
</body>
</html>
