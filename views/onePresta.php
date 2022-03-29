<?php
require '../controllers/infoPrestaController.php';
require '../data/array.php';
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout présta</title>
    <link rel="stylesheet" href="../assets/css/lightbox.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css%22%3E">

    <!-- STYLE.CSS -->
    <link rel="stylesheet" href="../assets/style.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">

</head>

<body class="card">
    <div class="row d-sm-block fixed-top justify-content-center">
        <nav>
            <div class="navbar border border-dark">
                <p class="fs-3"> <?php if (isset($_SESSION['login'])) {  ?>
                        Bonjour <b class="text-danger"><?= $_SESSION['login'] ?></b> </p>
            <?php }  ?></p>
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
                                <button type="submit" class="fs-3 btn-lg btn p-5" href="../views/deconnexion.php">Déconnexion</button>
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
                        <button type="submit" class=" dropdown-toggle fs-3 btn-lg btn p-5" data-bs-toggle="dropdown" aria-expanded="false"> Prestations
                        </button>
                        <ul class="dropdown-menu">
                            <div class="">
                                <li><a class="fs-2 text-start dropdown-item" href="../views/prestations.php?category=1">Réflexologies</a></li>
                                <li><a class="fs-2 text-start dropdown-item" href="../views/prestations.php?category=2">Massages</a></li>
                                <li><a class="fs-2 text-start dropdown-item" href="../views/prestations.php?category=3">Hypnoses</a></li>
                                <li><a class="fs-2 text-start dropdown-item" href="../views/prestations.php?category=4">Auriculothérapie</a></li>
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
                        <a href="../views/mentionsLegales.php" class="fs-3 btn-lg btn p-5">Mentions légales</a>

                    </li>

                    <li>
                        <form method="POST">
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
    <!-- DEBUT TABLEAU 2 D -->


    <div class="onePage mt-5 pt-4 row g-6 d-flex justify-content-center">

        <?php
        // Nous mettons en place une condition pour s'assurer que nous avons selectionné un soin avec le bouton Modifier
        if (isset($prestaInfo)) { ?>
            <div class="pt-4 col-6 ">
                <div class="shadow card">

                    <!-- ///////////////////////////////// -->
                    <div id="carouselExampleControls" class="mx-auto text-center carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="p-2 ">
                                    <img src="../assets/img/<?= $prestaInfo["ser_picture"] ?>" class="img-fluid  photoCardCat " alt="...">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="p-2 ">
                                    <img src="../assets/img/<?= $prestaInfo["ser_miniature"] ?>" class="img-fluid  photoCardCat " alt="...">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div class="card-body">
                        <h1 class="text-center card-title"><b><?= $prestaInfo['ser_name'] ?></b></h1>
                        <p class="m-4 h4 descri card-text"><?= $prestaInfo['ser_description'] ?></p>
                    </div>
                    <hr>
                    <!-- Recuperation et affichage des benefices lors de l'ajout -->
                    <div class="h-50" id="global">
                        <div id="left">
                            <ul class="p-3 ">
                                <p class="h3 text-center"><u>BÉNÉFICES</u></p>
                                <?php $serviceBenefits = new Benefits();
                                $arrayServiceBenefits = $serviceBenefits->getServiceBenefits($prestaInfo['ser_id']);
                                foreach ($arrayServiceBenefits as $ServiceBenefits) {
                                ?>
                                    <li class="m-4 h4 text-start"><?= $ServiceBenefits['ben_names'] ?></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <!-- Recuperation et affichage des contres indications lors de l'ajout -->
                        <div id="right ">
                            <ul class="p-3">
                                <p class="h3 text-center"><u> CONTRES-INDICATIONS</u></p>
                                <?php
                                $serviceContraindication = new Contraindication();
                                $arrayServiceContraindication = $serviceContraindication->getServiceContraindication($prestaInfo['ser_id']);
                                foreach ($arrayServiceContraindication as $ServiceContraindication) { ?>
                                    <li class="m-4 h4"><?= $ServiceContraindication['cont_name'] ?></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center card-footer">
                        <p>
                        <h3 class="card-text">Temps de la séance : <?= $prestaInfo['ser_time'] ?> Min</h3>
                        </p>
                        <hr>
                        <p>
                        <h3 class="card-text">Prix de la séance : <?= $prestaInfo['ser_price'] ?> €</h3>
                        </p>
                    </div>
                    <form class="text-center" action="../index.php" method="POST">
                        <a href="javascript:history.back()" class="fs-3 btn-lg btn p-4" type="submit" value="accueil">Retour</a>
                    </form>

                    <form class="d-flex justify-content-center" action="infoPresta.php" method="POST">
                        <?php if (isset($_SESSION["login"])) { ?>
                            <input type="hidden" name="idPresta" value="<?= $prestaInfo["ser_id"] ?>">
                            <button type="submit" class="btn-lg btns m-4">Modifier</button>

                            <button type="button" class="btn-lg btnd m-4" data-bs-toggle="modal" data-bs-target="#deleteModal1<?= $prestaInfo["ser_id"] ?>"> Supprimer le soin </button>
                    </form>
                <?php } ?>

                <!-- Modal -->
                <div class="modal fade" id="deleteModal1<?= $prestaInfo["ser_id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fs-1" id="exampleModalLabel">Supprimer le soin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="text-center fs-3 modal-body">
                                <p> Vous êtes sur le point de supprimer le soin</p>
                                <p> <b class="text-danger"> <?= $prestaInfo["ser_name"] ?></b></p>
                            </div>
                            <div class="wrap modal-footer">
                                <button type="button" class="btn-lg btn btns" data-bs-dismiss="modal">Annuler</button>
                                <form action="" method="POST">
                                    <input type="hidden" name="deleteService" value="<?= $prestaInfo["ser_id"] ?>">
                                    <button type="submit" name="idDeleteService" class="btn-lg btn btnd ">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>


    </div>

<?php } ?>

</body>



<!-- FOOTER -->
<footer class="footerTarifs border border-secondary">
    <div class="row text-center">
        <div class="p-4 vertical col-4 ">
            <p class="adresse">COORDONNEES</p>
            <p class="fs-4"> PESQUET Manuella </p>
            <p class="fs-4">98 Route Des Hêtres </p>
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
                    <div class="fs-5 carousel-item active" data-interval="1000">⭐️⭐️⭐️⭐️⭐️ <br> <br>
                        Je recommande à 200% Manuella. Elle est très à l'écoute <br> et donne de très bons conseils, <br> la réflexologie est très bénéfique pour moi. <br> Avant de consulter Manuella <br> j'étais très angoissée <br> (je souffre de névroses phobiques). <br> Depuis que je suis suivie <br> par elle mes angoisses sont plus facilement <br> gérables et j'arrive même à positiver <br> alors qu'avant je voyais tout en négatif.
                    </div>
                    <div class="fs-5 carousel-item" data-interval="1000">⭐️⭐️⭐️⭐️ <br> <br>
                        Première séance hier pour ma fille de 4 ans <br>, praticienne très professionnelle <br> à l’écoute et détente garantie même après la séance. <br> Je conseille fortement !
                    </div>
                    <div class="fs-5 carousel-item" data-interval="1000">⭐️⭐️⭐️⭐️⭐️ <br> <br>
                        2 séances pour ma fille <br> de 4 ans et de très bons résultats,<br> elle est plus calme,<br> posée et de gros progrè <br>
                        Pour part une séance et <br> je suis plus cool moins à cran.<br>
                        Personne sympathique et très à l'écoute. <br>
                        Je recommande à 100%.
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

        <p class="copyright">©Bien-être des pieds à la tête 2022</p>
    </div>
</footer>
<!-- Footer end -->
<script src="../assets/js/lightbox-plus-jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<!-- Footer script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    // Aperçu de preview picture
    pictureToUpload.addEventListener("change", function() {
        let input = this;
        let oFReader = new FileReader(); // on créé un nouvel objet FileReader
        oFReader.readAsDataURL(this.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreviewPicture.setAttribute('src', oFREvent.target.result);
        };
    })
</script>

<script>
    // Aperçu de preview miniature
    miniToUpload.addEventListener("change", function() {
        let input = this;
        let oFReader = new FileReader(); // on créé un nouvel objet FileReader
        oFReader.readAsDataURL(this.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreviewMini.setAttribute('src', oFREvent.target.result);
        };
    })
</script>

</body>

</html>