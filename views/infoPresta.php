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
            <?php } ?>
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
                        <button type="submit" class=" dropdown-toggle fs-3 btn-lg btn p-5" data-bs-toggle="dropdown" aria-expanded="false">
                            Prestations
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

    <?php if ($modifyPrestaOK) {

    ?>
        <p class="pt-4 fs-1 text-center text-success">
            La modification a été effectué avec succès.
        </p>
        <div class="text-center">
            <a class="btn-lg btn btns" type="button" href="home.php">Acceder aux soins</a>
        </div>
    <?php } else { ?>


        <?php
        // Nous mettons en place une condition pour s'assurer que nous avons selectionné un soin avec le bouton Modifier
        if (isset($prestaInfo)) { ?>

            <h1 class="d-flex justify-content-center">Information du soin</h1>
            <form class="fs-5 d_flex justify-content-center row pt-5" enctype="multipart/form-data" action="" method="POST" novalidate>


                <div class="shadow col-5 text-center border border-dark form-group m-4  p-4">
                    <label for="pictureToUpload" class="fs-1 form-label mt-4">Ajouter une image :</label><span class="text-danger"></span>
                    <div>
                        <input type="hidden" name="oldPicture" value="<?= $prestaInfo["ser_picture"] ?>">
                        <img src="../assets/img/<?= $prestaInfo["ser_picture"] ?>" class="mx-auto text-center photoCardCat " alt="..." value="<?= isset($_POST["pictureToUpload"]) ? htmlspecialchars($_POST["pictureToUpload"]) : $prestaInfo['ser_picture'] ?>">
                        <!-- upload picture -->
                    </div>
                    <div class="p-3">
                        <p><input value="" type="file" name="pictureToUpload" id="pictureToUpload"></p>
                        <p><img class="text-center" id="imgPreviewPicture"></p>
                    </div>
                </div>

                <div class="shadow col-6 text-center border border-dark form-group m-4 p-4">
                    <label for="miniToUpload" class="fs-1 form-label mt-3">Ajout d'une miniature pour tarif: </label><span class="text-danger"></span>
                    <div>

                        <input type="hidden" name="oldMini" value="<?= $prestaInfo["ser_miniature"] ?>">
                        <img src="../assets/img/<?= $prestaInfo["ser_miniature"] ?>" class="mx-auto text-center photoCardCat " alt="..." value="<?= isset($_POST["miniToUpload"]) ? htmlspecialchars($_POST["miniToUpload"]) : $prestaInfo['ser_miniature'] ?>">
                        <!-- upload miniature -->
                    </div>
                    <div class="p-3">
                        <p><input value="" type="file" name="miniToUpload" id="miniToUpload"></p>
                        <p><img class="text-center" id="imgPreviewMini"></p>
                    </div>

                </div>

                <div class="shadow col-5 justify-content-center border border-dark m-4 form-group">

                    <!-- SELECT CATEGORIES -->

                    <label for="category" class="fs-1 form-label mt-3">Categories: </label><span class="text-danger"><?= $arrayError["categories"] ?? " "; ?></span>
                    <select id="categories" name="categories" class="fs-2 form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <?php foreach ($arrayCat as $category) { ?>
                            <option value="<?= $category['idCat'] ?>" <?= $category['idCat'] == $prestaInfo['cat_id'] ? 'selected' : '' ?>><?= $category['nameCat'] ?></option>
                        <?php } ?>

                    </select>


                    <label for="name" class="fs-1 form-label mt-3">Nom du soin : </label><span class="text-danger">
                        <?=
                        $arrayError["name"] ?? " ";
                        ?>
                    </span>
                    <input value="<?= isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : $prestaInfo['ser_name'] ?>" name="name" type="text" class="fs-3 form-control" id="name">

                    <label for="intro" class="fs-1 form-label mt-3">intro: </label><span class="text-danger">

                    </span>

                    <textarea class="fs-3" value="<?= isset($_POST["intro"]) ? htmlspecialchars($_POST["intro"]) : $prestaInfo['ser_intro'] ?> id=" intro" name="intro" rows="12" cols="65"><?= $prestaInfo['ser_intro'] ?> </textarea>

                    <label for="description" class="fs-1 form-label mt-3">Description : </label><span class="text-danger">
                        <?=
                        $arrayError["description"] ?? "";
                        ?>
                    </span>

                    <textarea class="fs-3" value="<?= isset($_POST["description"]) ? htmlspecialchars($_POST["description"]) : $prestaInfo['ser_description'] ?>" id="description" name="description" rows="12" cols="65"> <?= $prestaInfo['ser_description'] ?></textarea>

                    <label for="time" class="fs-1 form-label mt-3">Durée: </label><span class="text-danger">
                        <?=
                        $arrayError["time"] ?? " ";
                        ?>
                    </span>
                    <select value="<?= isset($_POST["time"]) ? htmlspecialchars($_POST["time"]) : $prestaInfo['ser_time'] ?>" name="time" type="text" class="fs-3 form-control" id="time" name="time" class="fs-2 form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected><?= $prestaInfo['ser_time'] ?></option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="45">45</option>
                        <option value="60">60</option>
                    </select>



                    <label for="price" class="fs-1 form-label mt-3">Tarif: </label><span class="text-danger">
                        <?=
                        $arrayError["price"] ?? " ";
                        ?>
                    </span>
                    <select name="price" type="text" class=" fs-3 form-control" id="price" name="price" class="fs-2 form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected><?= $prestaInfo['ser_price'] ?></option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="55">55</option>
                    </select>
                </div>
                <div class="shadow fs-3 col-4 justify-content-center border border-dark m-4 form-group form-check checkbox-warning-filled">

                    <!-- Bien-faits CHECKBOX -->

                    <?php
                    // Mise en place d'un tableau contenant uniquement les id des bénefices
                    $serviceBenefits = new Benefits();
                    // on recherche via l'id
                    $arrayServiceBenefits = $serviceBenefits->getServiceBenefits($prestaInfo['ser_id']);
                    // nous allons stocker les id dans un tableau : arrayBenefits et via une boucle
                    $arrayBenefits = [];
                    foreach ($arrayServiceBenefits as $benefit) {
                        // array push va nous permettre de remplir le tableau
                        array_push($arrayBenefits, $benefit['ben_id']);
                    };
                    ?>

                    <label for="benefits" class=" row fs-1 form-label mt-3">Biens-Faits: </label><span class="text-danger"> <?= $arrayError["benefits"] ?? " "; ?></span>
                    <div id="optionsBenefits">
                        <?php foreach ($arrayBen as $ben) {

                        ?>

                            <div class="fs-3 form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="benefits[]" value="<?= $ben["ben_id"] ?>" <?= in_array($ben["ben_id"], $arrayBenefits) ? "checked" : "" ?>>
                                <label class="fs-3 text-start form-check-label"><?= $ben["ben_names"] ?></label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="shadow text-start col-4 justify-content-center border border-dark mb-3 form-group form-check checkbox-warning-filled">

                    <?php
                    // Mise en place d'un tableau contenant uniquement les id des contres indications
                    $serviceContraindication = new Contraindication();
                    // on recherche via l'id
                    $arrayServiceContraindication = $serviceContraindication->getServiceContraindication($prestaInfo['ser_id']);
                    // nous allons stocker les id dans un tableau : arrayServiceContraindication et via une boucle
                    $arrayContraindications = [];
                    foreach ($arrayServiceContraindication as $Contraindications) {
                        // array push va nous permettre de remplir le tableau
                        array_push($arrayContraindications, $Contraindications['cont_id']);
                    };

                    ?>
                    <!-- CONTRE INDICATION CHECKBOX -->

                    <label for="text-start contraindication" class=" fs-1 form-label mt-3">Contres-Indications: </label><span class="text-danger"> <?= $arrayError["contraindication"] ?? " "; ?></span>
                    <?php foreach ($arrayCont as $cont) { ?>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="contraindication[]" value="<?= $cont["cont_id"] ?>" <?= in_array($cont["cont_id"], $arrayContraindications) ? "checked" : "" ?>>
                            <label class="fs-3 text-start form-check-label"><?= $cont["cont_name"] ?></label>
                        </div>
                    <?php } ?>
                </div>
                <div class="text-center">

                    <form>
                        <input type="hidden" name="idPresta" value="<?= $prestaInfo['ser_id'] ?>">
                        <button type="submit" name="updateBtn" value="" class="btn-lg btn btns">Enregistrer les modifications</button>

                    </form>


                    <form class="text-center" action="../index.php" method="POST">
                    <a href="javascript:history.back()" class="fs-3 btn-lg btn p-4" type="submit" value="accueil">Retour</a>
                    </form>
                </div>


        <?php }
    }
        ?>
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

<script>
    // creation d'une constante reprenant les bénefices initiales avant modif
    const saveBenefits = <?= json_encode($arrayBenefits) ?>;
    const optionsBenefits = document.getElementById("optionsBenefits");
    const categories = document.getElementById("categories");
    categories.addEventListener("change", function() {
        let cat_id = this.value
        let url = `../controllers/ajaxBenefits.php?getBenefits=${cat_id}`
        fetch(url)
            .then(response => response.json())
            .then(data => {
                optionsBenefits.innerHTML = "";
                data.forEach(benefit => {
                    optionsBenefits.innerHTML += `
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="benefits[]" value="${benefit.ben_id}" ${saveBenefits.includes(benefit.ben_id) ? 'checked' : ''} >
                            <label class="text-start form-check-label" for="flexSwitchCheckDefault">${benefit.ben_names}</label>
                        </div> `
                })
            })
            .catch(error => console.log(error))
    });
</script>
</body>

</html>