<?php
if(!empty($POST['id']) && !empty($_POST['password'])) {
setcookie('id', $_POST['id'], time() + (3600*24*365));
setcookie('password', $_POST['password'], time() + (3600*24*365));
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Manga-World</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width" />
  <!-- CDN BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
  integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
  integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!-- ICONE DE PAGE -->
  <link rel="icon" href="assets/icon/shirt-saiyan-is-coming-blanc-pour-homme-et-femme.jpg" />
  <!-- FEUILLE DE STYLE -->
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>  <div id="body" class="container-fluid">
    <!-- Tête d'affiche -->
    <script src="assets/js/script.js"></script>
    <div class="ec1">
      <div class="row test3 d-flex justify-content-center">
        <!--NavBar -->
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-md ">
            <img src="assets/icon/images-ConvertImage.png" class="img-circle" id="Img1" />
            <div class="navbar-header" >
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-align-justify"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown" >
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link" href="index.php" id="accueil1">
                    Accueil
                  </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="luminaire.php" id="navbarDropdownMenuLink">
                    Luminaire
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" id="dragon" href="#">Dragon Ball</a>
                    <a class="dropdown-item" href="#">Naruto</a>
                    <a class="dropdown-item" href="#">One piece</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="figurine.php" id="navbarDropdownMenuLink">
                    Figurines
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Dragon Ball</a>
                    <a class="dropdown-item" href="#">Naruto</a>
                    <a class="dropdown-item" href="#">One Piece</a>
                    <a class="dropdown-item" href="#">My Hero Academia</a>
                  </div>
                </li>
                <a class="nav-link" href="login.php">
                  Log In
                </a>
                <a class="nav-link" href="register.php">
                  Register
                </a>
              </ul>
            </div>
            <button type="button" class="btn grey" id="myBtn"><span class="fas fa-shopping-cart fa-2x"></span></button>
          </nav>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">

                <h4 class="modal-title">Pannier</h4>
              </div>
              <div class="modal-body">
                <p>Bienvenu dans votre pannier.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
       <form action="index.php" method="POST">
      <input type="id" name="id" placeholder="Identifiant"><br/>
      <input type="password" name="password" placeholder="Mot de passe"><br/>
      <input type="submit" value="Valider" />
    </form>
    <p>
        <?php
        if(isset($_GET['id'])){
          //Récupération de l'ID
          echo $_GET['id'];
        }
        ?>
        </p>
        <p>
            <?php
        if(isset($_GET['password'])){
          //Récupération du Password
          echo $_GET['password'];
        }
        ?>
        </p>
        <footer>
  <div class="row py-4 d-flex align-items-center">
    <div id="foota">
      <div class="container-fluid">
        <!-- Grid row-->
      </div>
    </div>
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
      <!-- Grid row -->
      <div class="row mt-3 dark-grey-text">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

          <!--Liens-->

          <h6 id="forco" class="text-uppercase font-weight-bold">Mes liens</h6>
          <p>
            <a href="https://www.facebook.com/Ryan.Redskins"><i id="iconstyle" class="fab fa-facebook-square fa-3x"></i></a>
            <a href="https://www.instagram.com/?hl=fr"><i id="iconstyle" class="fab fa-instagram fa-3x"> </i> </a>
            <a href="https://github.com/RyanElr"><i id="iconstyle" class=" fab fa-github fa-3x"></i></a>
            <a href="https://www.linkedin.com/in/ryan-el-rhichachmi-a6234013b/"><i id="iconstyle" class="fab fa-linkedin fa-3x"> </i></a>
          </p>
        </div>
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!--Contact-->

          <h6 id="forco" class="text-uppercase font-weight-bold">Mon adresse</h6>
          <p>
            <i class="fa fa-home mr-3"></i>60400 NOYON, 25, rue Louis Pergaud, France
          </p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 id="forco" class="text-uppercase font-weight-bold">Me contacter</h6>

          <p>
            <i  class="fa fa-envelope mr-3"></i><a id="mail" href="mailto: ">ryan.elr@outlook.com</a>
          </p>

          <p>
            <i  class="fa fa-phone mr-3"></i><a id="tel" href="tel: ">07.67.84.62.22</a>
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- Footer Links -->
  </div>
</footer>
        </body>
</html>
        