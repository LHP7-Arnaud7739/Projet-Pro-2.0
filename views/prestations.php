<?php
require '../data/array.php';
require '../controllers/prestaController.php';
require '../controllers/adminConnexionController.php';
session_start()


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <!-- STYLE.CSS -->
    <link rel="stylesheet" href="../assets/style.css">


    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
</head>

<body class="card">
    <div class="row d-sm-block fixed-top justify-content-center">
        <nav>
            <div class="navbar border border-dark">
                <p class="fs-3"> <?php if (isset($_SESSION['login'])) {  ?>
                        Bonjour <b class="text-danger"><?= $_SESSION['login'] ?></b> </p>
            <?php } ?></p>
            <!-- MENU BURGER -->
            <div class="hamburger-menu">
                <input id="menu__toggle" type="checkbox" />
                <label class="menu__btn" for="menu__toggle">
                    <span></span>
                </label>

                <ul class="menu__box">
                    <li><a class="p-4 text-center " href="https://www.facebook.com/Bien-%AAtre-des-pieds-%C3%AAte-555492944941100"><svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg></a>
                        <a class="p-4 " href="https://www.instagram.com/bien_etre_des_pieds_a_la_tete/?hl=fr"> <a class="p-4 " href="https://www.instagram.com/bien_etre_des_pieds_a_la_tete/?hl=fr"><img src="https://img.icons8.com/office/60/000000/instagram-new.png" /></a>
                        </a>
                    </li>

                    <li> <?php if (empty($_SESSION["login"])) { ?>
                            <a href="../views/adminConnexion.php" class="fs-3 btn-lg btn p-5" value="Forum">Connexion</a>
                        <?php } ?>
                        <?php if (isset($_SESSION["login"])) { ?>
                            <form class="" action="../views/deconnexion.php" method="POST">
                                <button type="submit" class="fs-3 btn-lg btn p-5" href="../views/deconnexion.php">D??connexion</button>
                            </form>
                        <?php } ?>
                    </li>
                    <li>
                        <?php if (isset($_SESSION["login"])) { ?>
                            <form class="" action="../views/addPresta.php" method="POST">
                                <button href="../views/addPresta.php" class="fs-3 btn-lg btn p-5" type="submit" value="accueil">Ajout d'un soin</button>
                            </form>
                        <?php } ?>
                    </li>
                    <div class="btn-group dropend">
                        <button type="submit" class="dropdown-toggle fs-3 btn-lg btn p-5" data-bs-toggle="dropdown" aria-expanded="false">
                            Prestations
                        </button>
                        <ul class="dropdown-menu">
                            <div class="">
                                <li><a class="fs-2 text-start dropdown-item" href="../views/prestations.php?category=1">R??flexologies</a></li>
                                <li><a class="fs-2 text-start dropdown-item" href="../views/prestations.php?category=2">Massages</a></li>
                                <li><a class="fs-2 text-start dropdown-item" href="../views/prestations.php?category=3">Hypnoses</a></li>
                                <li><a class="fs-2 text-start dropdown-item" href="../views/prestations.php?category=4">Auriculoth??rapie</a></li>
                                <li><a class="fs-2 text-start dropdown-item" href="../views/prestations.php?category=5">Bougies Hopi</a></li>
                            </div>
                        </ul>
                    </div>
                    <li>
                        <form class="" action="../views/aPropos.php" method="POST">
                            <button class="fs-3 btn-lg btn p-5" type="submit" value="accueil">Qui suis-je?</button>
                        </form>
                    </li>
                    
                    <li>
                        <a href="../views/mentionsLegales.php" class="fs-3 btn-lg btn p-5">Mentions l??gales</a>
                    </li>
                    <li>
                        <form class="" action="../index.php" method="POST">
                            <a href="javascript:history.back()" class="fs-3 btn-lg btn p-5" type="submit" value="accueil">Retour</a>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- FIN MENU BURGER -->
            <ul class=" main-nav">
                <div class="">
                    <!-- FIN LOGO -->
                    <img class="typo2" src="../assets/img/typo2.png" alt="">
                </div>
                <a class="logoBtn  d-flex justify-content-end" href="../index.php"><img src="../assets/img/mon_logo-removebg-preview.png" class="logo" value="Accueil"></a>
            </ul>
            </div>
        </nav>
    </div>
    <div class="row">
        <img class="col header1" src="../assets/img/background2.jpg" alt="">
    </div>

    <!-- /////////////////////////////////: -->
    <div class="d-flex justify-content-center pt-4">
        <div class="card mb-3 " style="max-width: 1500px;">
            <?php foreach ($arrayPresta as $allPresta) { ?>
                <div class="row g-0 border border-dark mb-5">
                    <div class="col-md-4">
                        <img src="../assets/img/<?= $allPresta["ser_picture"] ?>" class="px-4 mx-auto m-4 img-fluid photoCardCatArray" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title text-center"><?= $allPresta['ser_name'] ?></h1>
                            <p class="text-center p-5 fs-4"><?= $allPresta['ser_intro'] ?></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <form class="" action="../views/onePresta.php" method="POST">
                            <input type="hidden" name="idPresta" value="<?= $allPresta["ser_id"] ?>">
                            <button type="submit" class="btn-lg btni m-4">+ d'infos</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footerTarifs border border-secondary">
        <div class="row text-center">
            <div class="p-4 vertical col-4 ">
                <p class="adresse">COORDONNEES</p>
                <p class="fs-4"> PESQUET Manuella </p>
                <p class="fs-4">98 Route Des H??tres </p>
                <p class="fs-4">76110 MANNEVILLE LA GOUPIL</p>
                <p class="fs-4">06 52 94 20 39</p>
                <p class="fs-4">09 51 11 09 18</p>

            </div>
            <div class="p-4 col-4 ">
                <p class="adresse">TEMOIGNAGE</p>
                <div id="carouselExampleIndicators" class="text-center carousel slide mt-5" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="fs-5 carousel-item active" data-interval="1000">?????????????????????????????? <br> <br>
                            Je recommande ?? 200% Manuella. Elle est tr??s ?? l'??coute <br> et donne de tr??s bons conseils, <br> la r??flexologie est tr??s b??n??fique pour moi. <br> Avant de consulter Manuella <br> j'??tais tr??s angoiss??e <br> (je souffre de n??vroses phobiques). <br> Depuis que je suis suivie <br> par elle mes angoisses sont plus facilement <br> g??rables et j'arrive m??me ?? positiver <br> alors qu'avant je voyais tout en n??gatif.
                        </div>
                        <div class="fs-5 carousel-item" data-interval="1000">???????????????????????? <br> <br>
                            Premi??re s??ance hier pour ma fille de 4 ans <br>, praticienne tr??s professionnelle <br> ?? l?????coute et d??tente garantie m??me apr??s la s??ance. <br> Je conseille fortement !
                        </div>
                        <div class="fs-5 carousel-item" data-interval="1000">?????????????????????????????? <br> <br>
                            2 s??ances pour ma fille <br> de 4 ans et de tr??s bons r??sultats,<br> elle est plus calme,<br> pos??e et de gros progr?? <br>
                            Pour part une s??ance et <br> je suis plus cool moins ?? cran.<br>
                            Personne sympathique et tr??s ?? l'??coute. <br>
                            Je recommande ?? 100%.
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 vertical1 col-4 ">
                <div>
                    <p class="adresse">HEURES D'OUVERTURE</p>
                    <p class="fs-4 text-center"> lundi: 9H00 - 18H </p>
                    <p class="fs-4 text-center"> Mardi: 9H00 - 18H </p>
                    <p class="fs-4 text-center"> Mercredi: 9H00 - 12H </p>
                    <p class="fs-4 text-center"> Jeudi: 9H00 - 18H </p>
                    <p class="fs-4 text-center"> Vendredi: 9H00 - 18H </p>
                    <p class="fs-4 text-center"> Samedi: 9H00 - 12H </p>

                </div>
            </div>
        </div>

        <div class="text-center">
            <div class="">
                <a class="" href="../index.php"><input class="logoFooter" type="image" src="../assets/img/mon_logo-removebg-preview.png" value="Accueil"></a>
            </div>

            <p class="copyright">??Bien-??tre des pieds ?? la t??te 2022</p>
        </div>
    </footer>
    <!-- Footer end -->

   
    <!-- Footer script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>


</html>