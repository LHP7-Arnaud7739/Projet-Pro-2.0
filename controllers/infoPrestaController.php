<?php

require '../config.php';
require '../models/DataBase.php';
require '../models/clients.php';
require '../models/services.php';

$arrayError = [];

// creer une variable pour cacher ou montrer ton formulaire
$modifyPrestaOk = 0;

if (isset($_POST["idPresta"])) {
    $ser_Id = htmlspecialchars(trim($_POST["idPresta"]));
    $prestaObj = new Services();
    $prestaInfo = $prestaObj->getOneService($ser_Id);
}


if (isset($_POST["updateBtn"])) {
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

        $allBenefits = new Benefits();
        $arrayBen = $allBenefits->allBenefits();
        if (empty($_POST["benefits"])) {
            $arrayError["benefits"] = "Veuillez indiquer un ou des bénéfices";
        }
    }

    if (isset($_POST["contraindication"])) {
        $allContraindication = new Contraindication();
        $arrayCont = $allContraindication->allContraindication();
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

    if (count($arrayError) == 0) {
        // strtoupper = en majuscule / ucwords = 1ere lettre en majuscule
        $name = htmlspecialchars(trim($_POST['name']));
        $description = htmlspecialchars(trim($_POST['description']));
        $price = htmlspecialchars(trim($_POST['price']));
        $time = htmlspecialchars(trim($_POST['time']));
        $picture = htmlspecialchars(trim($_POST['pictureToUpload']));
        $miniature = htmlspecialchars(trim($_POST['miniToUpload']));
        $catId = htmlspecialchars(trim($_POST['categories']));
        $intro = htmlspecialchars(trim($_POST['intro']));
        $serId = htmlspecialchars(trim($_POST['idPatient']));

        $service = new Prestation ();
        $service->modifyService($name, $intro, $description, $price, $time, $picture, $miniature, $catId);
        $serviceInfo = $serviceObj->getOneService($id);
        $modifyServiceOk = 1;
    }
};


$allPresta = new Prestation();
$arrayPresta = $allPresta->allPresta();

$allContraindication = new Contraindication();
$arrayCont = $allContraindication->allContraindication();

$allBenefits = new Benefits();
$arrayBen = $allBenefits->allBenefits();

