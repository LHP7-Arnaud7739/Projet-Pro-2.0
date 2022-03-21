<?php

require '../config.php';
require '../models/DataBase.php';
require '../models/services.php';

$arrayError = [];

$addServicesOk = false;




if (isset($_POST["btn-submit-presta"])) {

    
    if (!isset($_POST["categories"])) {
        $arrayError["categories"] = "Selectionner une categorie";
    }

    if (isset($_POST["name"])) {
        if (empty($_POST["name"])) {
            $arrayError["name"] = "Veuillez saisir le nom de soin";
        }
    }
    if (isset($_POST["description"])) {
        if (empty($_POST["description"])) {
            $arrayError["description"] = "Veuillez saisir une description";
        }
    }
    if (isset($_POST["intro"])) {
        if (empty($_POST["intro"])) {
            $arrayError["intro"] = "Veuillez saisir une introduction";
        }
    }

    if (isset($_POST["benefits"])) {
        if (empty($_POST["benefits"])) {
            $arrayError["benefits"] = "Veuillez indiquer un ou des bénéfices";
        }
    }

    if (isset($_POST["contraindication"])) {
        if (empty($_POST["contraindication"])) {
            $arrayError["contraindication"] = "Veuillez indiquer un ou des contres-indications";
        }
    }

    if (isset($_POST["time"])) {
        if (empty($_POST["time"])) {
            $arrayError["time"] = "Veuillez indiquer une durée";
        }
    }

    if (isset($_POST["price"])) {
        if (empty($_POST["price"])) {
            $arrayError["price"] = "Veuillez indiquer un prix";
        }
    }
    if (isset($_FILES['pictureToUpload'])) {

        $tmpName = $_FILES['pictureToUpload']['tmp_name'];
        $name = $_FILES['pictureToUpload']['name'];
        $size = $_FILES['pictureToUpload']['size'];
        $error = $_FILES['pictureToUpload']['error'];
        $maxSize = 2000000;
        $tabExtension = explode('.', $name);
        $extension = strtolower(end($tabExtension));
        $extensions = ['jpg', 'jpeg', 'png',];

        if (in_array($extension, $extensions) && $size < $maxSize && $error == 0) {
            $uniqueName = uniqid('', true);
            $file = $uniqueName . "." . $extension;
            move_uploaded_file($tmpName, '../assets/img/' . $file);
        }
    }

    if (isset($_FILES['miniToUpload'])) {
        $messageInfo =  'Désolé, une erreur est produite lors du téléchargement de votre fichier.';

        $tmpName = $_FILES['miniToUpload']['tmp_name'];
        $name = $_FILES['miniToUpload']['name'];
        $size = $_FILES['miniToUpload']['size'];
        $error = $_FILES['miniToUpload']['error'];
        $maxSize = 2000000;
        $tabExtension = explode('.', $name);
        $extension = strtolower(end($tabExtension));
        $extensions = ['jpg', 'jpeg', 'png',];

        if (in_array($extension, $extensions) && $size < $maxSize && $error == 0) {
            $uniqueName = uniqid('', true);
            $fileMini = $uniqueName . "." . $extension;
            move_uploaded_file($tmpName, '../assets/img/' . $fileMini);
        }
    }
    if (count($arrayError) == 0) {
        // strtoupper = en majuscule / ucwords = 1ere lettre en majuscule
        $name = htmlspecialchars(trim($_POST['name']));
        $description = htmlspecialchars(trim($_POST['description']));
        $price = htmlspecialchars(trim($_POST['price']));
        $time = htmlspecialchars(trim($_POST['time']));
        $picture = $file;
        $miniature =  $fileMini;
        $catId = htmlspecialchars(trim($_POST['categories']));
        $intro = htmlspecialchars(trim($_POST['intro']));

        //Je creer un nouveau service puis je recupere son ID à l'aide de la methode addService
        $Services = new Services();
        $idService = $Services->addService($name, $intro, $description, $price, $time, $picture, $miniature, $catId);

        //Je recupere les benefice sous forme de tableau, et j'effectue une boucle pour lancer la methode addBenefitsToService
        foreach ($_POST['benefits'] as $benefit) {
            $addBenefitsToService = new Services();
            $addBenefitsToService->addBenefitsToService($benefit, $idService);
        }

        //Je recupere les contres indications sous forme de tableau, et j'effectue une boucle pour lancer la methode addContraindicationToService
        foreach ($_POST['contraindication'] as $contraindication) {
            $addContraindicationToService = new  Contraindication();
            $addContraindicationToService->addContraindicationToService($idService, $contraindication);
        }
        $addServicesOk = true;
    }
    else {
        $messageInfo =  'Le fichier n\'est pas une image.';
    }
};


$allPresta = new Prestation();
$arrayPresta = $allPresta->allPresta();

$allCatName = new Categories();
$arrayCatName = $allCatName->catName();

$allContraindication = new Contraindication();
$arrayCont = $allContraindication->allContraindication();

$allBenefits = new Benefits();
$arrayBen = $allBenefits->allBenefits();
