<?php
$regexPhoneNumber = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z]+$/';
?>
<?php include'views/header.php'?>
    <body>
        <?php if (empty($_POST)) {
            ?>
            <form action="../index.php" method="POST">
                <ul>
                    <li>
                        <label for = "lastname">Nom : </label>
                        <input type = "text" name = "lastname" />
                    </li>
                    <li>
                        <label for = "firstname">Prénom : </label>
                        <input type = "text" name = "firstname" />
                    </li>
                    <li>
                        <label for = "birthDate">Date de naissance : </label>
                        <input type = "date" name = "birthDate" />
                    </li>
                    <li>
                        <label for = "originalCountry">Pays de naissance : </label>
                        <input type = "text" name = "originalCountry" />
                    </li>
                    <li>
                        <label for = "nationality">Nationalité : </label>
                        <input type = "text" name = "nationality" />
                    </li>
                    <li>
                        <label for = "address">Adresse : </label>
                        <input type = "text" name = "address" />
                    </li>
                    <li>
                        <label for = "mail">Email : </label>
                        <input type = "mail" name = "mail" />
                    </li>
                    <li>
                        <label for = "phoneNumber">Téléphone : </label>
                        <input type = "text" name = "phoneNumber" />
                    </li>
                    <li>
                        <select name = "animal">
                            <option value="Mr">Quel est votre animal préféré?</option>
                            <option value="Mme">Quel est le nom de votre père?</option>
                            <option value="Ms">Le nom de votre manga préféré?</option>
                        </select>
                        <input type = "text" name = "animal" />
                    </li>
                </ul>
                <input type="submit" value="J'accepte !" />
            </form>
            <?php
        } else {
            if (isset($_POST['lastname'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['lastname'])) {
                        echo 'Nom : ' . $_POST['lastname'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['firstname'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['firstname'])) {
                        echo 'Prénom : ' . $_POST['firstname'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['birthDate'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexDate, $_POST['birthDate'])) {
                        echo 'Date de naissance : ' . $_POST['birthDate'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['originalCountry'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['originalCountry'])) {
                        echo 'Pays de naissance : ' . $_POST['originalCountry'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['nationality'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['nationality'])) {
                        echo 'Nationalité : ' . $_POST['nationality'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['address'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexAddress, $_POST['address'])) {
                        echo 'Adresse : ' . $_POST['address'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['mail'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexMail, $_POST['mail'])) {
                        echo 'Email : ' . $_POST['mail'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['phoneNumber'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexPhoneNumber, $_POST['phoneNumber'])) {
                        echo 'Téléphone : ' . $_POST['phoneNumber'];
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['animal'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['animal'])) {
                        echo 'Quel est votre animal préféré?' . $_POST['animal'];
                    }
                    ?>
                </p>
                <?php
            }
        }
        ?>
        <?php include 'views/footer.php'; ?>
    </body>
</html>