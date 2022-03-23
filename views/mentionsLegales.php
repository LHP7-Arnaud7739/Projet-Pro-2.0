<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../assets/css/lightbox.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css%22%3E">

    <!-- STYLE.CSS -->
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body class="">
    <div class="row d-sm-block fixed-top justify-content-center">
        <div class="navbar border border-dark">
            <input type="checkbox" id="drop-down-cbox" />
            <label for="drop-down-cbox">
                <span></span>
                <span></span>
                <span></span>
            </label>
            <ul class="fs-1 main-nav">
                <li><a href="../index.php" class=" btn fs-1 col text-dark">Accueil</a></li>

                <li class="">Prestations
                    <ul>
                        <li><a class="fs-3 text-start dropdown-item" href="../views/prestations.php?category=1">Réflexologies</a></li>
                        <li><a class="fs-3 text-start dropdown-item" href="../views/prestations.php?category=2">Massages</a></li>
                        <li><a class="fs-3 text-start dropdown-item" href="../views/prestations.php?category=3">Hypnoses</a></li>
                        <li><a class="fs-3 text-start dropdown-item" href="../views/prestations.php?category=4">Auriculothérapie</a></li>
                        <li><a class="fs-3 text-start dropdown-item" href="../views/prestations.php?category=5">Bougies Hopi</a></li>

                    </ul>
                </li>
                <li>Tarifs
                    <ul>
                        <li><a class="fs-3 text-start dropdown-item" href="../views/tarifs.php?category=1">Tarifs Réflexologies</a></li>
                        <li><a class="fs-3 text-start dropdown-item" href="../views/tarifs.php?category=2">Tarifs Massages</a></li>
                        <li><a class="fs-3 text-start dropdown-item" href="../views/tarifs.php?category=3">Tarifs Hypnoses</a></li>
                        <li><a class="fs-3 text-start dropdown-item" href="../views/tarifs.php?category=4">Tarifs Auriculothérapie</a></li>
                        <li><a class="fs-3 text-start dropdown-item" href="../views/tarifs.php?category=5">Tarifs Bougies Hopi</a></li>

                    </ul>
                </li>
                <?php if (empty($_SESSION["login"])) { ?>
                    <a href="../views/adminOK.php" class="fs-1 col  text-dark btn " value="Forum"><img src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-color-vitaly-gorbachev/70/000000/external-buddha-diwali-vitaliy-gorbachev-lineal-color-vitaly-gorbachev.png" /></a>
                <?php } ?>
                <?php if (isset($_SESSION["login"])) { ?>
                    <form class="text-center" action="../views/deconnexion.php" method="POST">
                    <button class="btn-lg btnd btn " href="../views/deconnexion.php">Déconnexion</button>
                    </form>
                <?php } ?>

        </div>
        </nav>
    </div>
    <div>
        <header class="header1 border border-dark">
            <!-- LOGO -->                    
            <div class="p-5">
                <a href="../index.php"><input class="logo" type="image" src="../assets/img/mon_logo-removebg-preview.png" value="Accueil"></a>
                <div class="d-flex justify-content-end">
                <!-- FIN LOGO -->
                <img class="typo" src="../assets/img/typo2.png" alt="">
            </div>
            </div>         
        </header>   
<div class="container">
<h1 class="m-5 text-center">Conditions générales d'utilisation</h1>

<p class="m-4 fs-3 text-center">En vigueur au 16/03/2022</p>
<p class="m-4 fs-4">Les présentes conditions générales d'utilisation (dites « CGU ») ont pour objet l'encadrement juridique
des modalités de mise à disposition du site et des services par _______________ et de définir les
conditions d’accès et d’utilisation des services par « l'Utilisateur ».
Les présentes CGU sont accessibles sur le site à la rubrique «CGU».
Toute inscription ou utilisation du site implique l'acceptation sans aucune réserve ni restriction des
présentes CGU par l’utilisateur. Lors de l'inscription sur le site via le Formulaire d’inscription, chaque
utilisateur accepte expressément les présentes CGU en cochant la case précédant le texte suivant : «
Je reconnais avoir lu et compris les CGU et je les accepte ».
En cas de non-acceptation des CGU stipulées dans le présent contrat, l'Utilisateur se doit de renoncer
à l'accès des services proposés par le site.
BienEtreDesPiedsALaTete.fr se réserve le droit de modifier unilatéralement et à tout moment le
contenu des présentes CGU.</p>

<p class="m-4 fs-2">Article 1 : Les mentions légales</p>

<p class="m-4 fs-4">L’édition et la direction de la publication du site BienEtreDesPiedsALaTete.fr est assurée par Pesquet
Manuella, domicilié 98 route des hêtres.
Numéro de téléphone est 0781551243
Adresse e-mail pesquet.manuella@free.fr.
L'hébergeur du site BienEtreDesPiedsALaTete.fr est la société OVH, dont le siège social est situé au
_______________, avec le numéro de téléphone : _______________.</p>

<p class="m-4 fs-2">ARTICLE 2 : Accès au site</p>
<p class="m-4 fs-4">Le site BienEtreDesPiedsALaTete.fr permet à l'Utilisateur un accès gratuit aux services suivants :
Le site internet propose les services suivants :
Services à la personne
Le site est accessible gratuitement en tout lieu à tout Utilisateur ayant un accès à Internet. Tous les
frais supportés par l'Utilisateur pour accéder au service (matériel informatique, logiciels, connexion
Internet, etc.) sont à sa charge.
L’Utilisateur non membre n'a pas accès aux services réservés. Pour cela, il doit s’inscrire en
remplissant le formulaire. En acceptant de s’inscrire aux services réservés, l’Utilisateur membre
s’engage à fournir des informations sincères et exactes concernant son état civil et ses coordonnées,
notamment son adresse email.

Pour accéder aux services, l’Utilisateur doit ensuite s'identifier à l'aide de son identifiant et de son mot
de passe qui lui seront communiqués après son inscription.
Tout Utilisateur membre régulièrement inscrit pourra également solliciter sa désinscription en se
rendant à la page dédiée sur son espace personnel. Celle-ci sera effective dans un délai raisonnable.
Tout événement dû à un cas de force majeure ayant pour conséquence un dysfonctionnement du site
ou serveur et sous réserve de toute interruption ou modification en cas de maintenance, n'engage pas
la responsabilité de BienEtreDesPiedsALaTete.fr. Dans ces cas, l’Utilisateur accepte ainsi ne pas tenir
rigueur à l’éditeur de toute interruption ou suspension de service, même sans préavis.
L'Utilisateur a la possibilité de contacter le site par messagerie électronique à l’adresse email de
l’éditeur communiqué à l’ARTICLE 1.</p>


<p class="m-4 fs-2">ARTICLE 3 : Collecte des données</p>
<p class="m-4 fs-4">Le site est exempté de déclaration à la Commission Nationale Informatique et Libertés (CNIL) dans la
mesure où il ne collecte aucune donnée concernant les Utilisateurs.</p>

<p class="m-4 fs-2">ARTICLE 4 : Propriété intellectuelle</p>
<p class="m-4 fs-4">Les marques, logos, signes ainsi que tous les contenus du site (textes, images, son…) font l'objet
d'une protection par le Code de la propriété intellectuelle et plus particulièrement par le droit d'auteur.
L'Utilisateur doit solliciter l'autorisation préalable du site pour toute reproduction, publication, copie des
différents contenus. Il s'engage à une utilisation des contenus du site dans un cadre strictement privé,
toute utilisation à des fins commerciales et publicitaires est strictement interdite.
Toute représentation totale ou partielle de ce site par quelque procédé que ce soit, sans l’autorisation
expresse de l’exploitant du site Internet constituerait une contrefaçon sanctionnée par l’article L 335-2
et suivants du Code de la propriété intellectuelle.
Il est rappelé conformément à l’article L122-5 du Code de propriété intellectuelle que l’Utilisateur qui
reproduit, copie ou publie le contenu protégé doit citer l’auteur et sa source.</p>

<p class="m-4 fs-2">ARTICLE 5 : Responsabilité</p>
<p class="m-4 fs-4">Les sources des informations diffusées sur le site BienEtreDesPiedsALaTete.fr sont réputées fiables
mais le site ne garantit pas qu’il soit exempt de défauts, d’erreurs ou d’omissions.
Les informations communiquées sont présentées à titre indicatif et général sans valeur contractuelle.
Malgré des mises à jour régulières, le site BienEtreDesPiedsALaTete.fr ne peut être tenu responsable
de la modification des dispositions administratives et juridiques survenant après la publication. De
même, le site ne peut être tenue responsable de l’utilisation et de l’interprétation de l’information
contenue dans ce site.
L'Utilisateur s'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle
que soit sa forme, est interdite. Il assume les risques liés à l'utilisation de son identifiant et mot de
passe. Le site décline toute responsabilité.

Le site BienEtreDesPiedsALaTete.fr ne peut être tenu pour responsable d’éventuels virus qui
pourraient infecter l’ordinateur ou tout matériel informatique de l’Internaute, suite à une utilisation, à
l’accès, ou au téléchargement provenant de ce site.
La responsabilité du site ne peut être engagée en cas de force majeure ou du fait imprévisible et
insurmontable d'un tiers.</p>

<p class="m-4 fs-2">ARTICLE 6 : Liens hypertextes</p>
<p class="m-4 fs-4">Des liens hypertextes peuvent être présents sur le site. L’Utilisateur est informé qu’en cliquant sur ces
liens, il sortira du site BienEtreDesPiedsALaTete.fr. Ce dernier n’a pas de contrôle sur les pages web
sur lesquelles aboutissent ces liens et ne saurait, en aucun cas, être responsable de leur contenu.</p>

<p class="m-4 fs-2">ARTICLE 7 : Cookies</p>
<p class="m-4 fs-4">L’Utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer automatiquement
sur son logiciel de navigation.
Les cookies sont de petits fichiers stockés temporairement sur le disque dur de l’ordinateur de
l’Utilisateur par votre navigateur et qui sont nécessaires à l’utilisation du site
BienEtreDesPiedsALaTete.fr. Les cookies ne contiennent pas d’information personnelle et ne peuvent
pas être utilisés pour identifier quelqu’un. Un cookie contient un identifiant unique, généré
aléatoirement et donc anonyme. Certains cookies expirent à la fin de la visite de l’Utilisateur, d’autres
restent.
L’information contenue dans les cookies est utilisée pour améliorer le site
BienEtreDesPiedsALaTete.fr.
En naviguant sur le site, L’Utilisateur les accepte.
L’Utilisateur pourra désactiver ces cookies par l’intermédiaire des paramètres figurant au sein de son
logiciel de navigation.</p>

<p class="m-4 fs-2">ARTICLE 8 : Droit applicable et juridiction compétente</p>
<p class="m-4 fs-4">La législation française s'applique au présent contrat. En cas d'absence de résolution amiable d'un
litige né entre les parties, les tribunaux français seront seuls compétents pour en connaître.
Pour toute question relative à l’application des présentes CGU, vous pouvez joindre l’éditeur aux
coordonnées inscrites à l’ARTICLE 1.
CGU réalisées sur http://legalplace.fr/</p>

<div class="d-flex justify-content-center">                            
    <a href="../index.php" class="m-4 btn-lg btn btns" type="button" value="accueil">Retour</a>
</div>
</div>
    </body>



        <!-- JAVASCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- FOOTER -->
    <footer class="footerMentionLegal border border-secondary">
        <div class="row text-center">
            <div class="p-4 vertical col-4 ">
                <p class="adresse">COORDONNEES</p>
                <p class="fs-4"> PESQUET Manuella </p>
                <p class="fs-4">98 Route Des Hêtres </p>
                <p class="fs-4">76110 MANNEVILLE LA GOUPIL</p>
                <p class="fs-4">06 52 94 20 39</p>
                <p class="fs-4">09 51 11 09 18</p>
                <p> <a class="" href="https://www.facebook.com/Bien-%AAtre-des-pieds-%C3%AAte-555492944941100"><svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
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
