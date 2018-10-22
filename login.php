<?php
$regexPhoneNumber = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z]+$/';
if (!empty($POST['id']) && !empty($_POST['password'])) {
    setcookie('id', $_POST['id'], time() + (3600 * 24 * 365));
    setcookie('password', $_POST['password'], time() + (3600 * 24 * 365));
}
?>
<?php include'views/header.php';?>
    <body>
        <form action="../index.php" method="POST">
            <input type="id" name="id" placeholder="Identifiant"><br/>
            <input type="password" name="password" placeholder="Mot de passe"><br/>
            <input type="submit" value="Se connecter" />
        </form>
        <p>
            <?php
            if (isset($_POST['id'])) {
                //Récupération de l'ID
                echo $_POST['id'];
            }
            ?>
        </p>
        <p>
            <?php
            if (isset($_POST['password'])) {
                //Récupération du Password
                echo $_POST['password'];
            }
            ?>
        </p>
       <?php include 'views/footer.php';?>
    </body>
</html>
