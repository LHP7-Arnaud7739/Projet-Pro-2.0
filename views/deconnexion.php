<?php
require '../adminConfig.php';
session_start();
session_destroy();

?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE TEST INDEX</title>
    <link rel="stylesheet" href="../assets/css/lightbox.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css%22%3E">

    <!-- STYLE.CSS -->
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <div class="row d-sm-block fixed-top  ">
        <div class="navbar border border-dark">

            <a href="../index.php" class="fs-1 col-2 text-center text-dark btn " value="Accueil">Accueil</a>
            <a href="../views/aPropos.php" class="btn fs-1 col-2 text-center text-dark" value="A Propos">A Propos</a>
            <a href="../views/tarifs.php" class="fs-1 col-2 text-center text-dark btn " value="Tarifs">Tarifs</a>
            <a href="../views/adminOK.php" class="fs-1 col-2 text-center text-dark btn " value="Forum"><img src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/100/000000/external-buddha-diwali-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png" /></a>
        </div>
    </div>
    <header class="header border border-dark">
        <!-- LOGO -->
        <div class="p-5 ">
            <a class="" href="../index.php"><input class="logo" type="image" src="../assets/img/mon_logo-removebg-preview.png" value="Accueil"></a>
            <!-- FIN LOGO -->
            <img class="typo" src="../assets/img/Typo.png" alt="">
        </div>
    </header>
    <div class="centrage row justify-content-center">
        <div class=" col-8 text-center  ">

            <div class="p-5 ">
                <p class="fs-1 justify-content-center">
                <h2>Vous avez bien été déconnecté.<h2>
                        </p>
            </div>
            <div class="p-5 wrap">
                <a href="../index.php" class="justify-content-start btn-lg btn btns" type="button" value="accueil">Accueil</a>
            </div>
        </div>
</body>



<!-- JAVASCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

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
            <p> <a class="" href="https://www.facebook.com/Bien-%AAtre-des-pieds-%C3%AAte-555492944941100"><svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg></a></p>
            <p><a class="" href="https://www.instagram.com/bien_etre_des_pieds_a_la_tete/?hl=fr"><svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                    </svg></a></p>
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
        <p class="list-inline-item">Accueil</p>
        <a href="../views/mentionsLegales.php" class="list-inline-item">Mentions légales</a>
        <p class="copyright">©Bien-être des pieds à la tête 2022</p>
    </div>
</footer>
<!-- Footer end -->

<script src="../assets/js/lightbox-plus-jquery.js"></script>

<script src="../assets/script/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<!-- Footer script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>


</html>