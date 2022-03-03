<?php
var_dump($_POST);
require '../config.php';
require '../models/DataBase.php';
require '../models/clients.php';
require '../models/services.php';

$arrayError = [];

$addServicesOk = false;




if (isset($_POST["btn-submit-presta"])) {

    if (!isset($_POST["categories"])) {
        $arrayError["categories"] = "Selectionner une categorie";
    }

    if (isset($_POST["name"])) {
        if (empty($_POST["name"])) {
            $arrayError["name"] = "Veuillez saisir un nom de soin";
        }
    }
    if (isset($_POST["description"])) {
        if (empty($_POST["description"])) {
            $arrayError["description"] = "Veuillez saisir une description";
        }
    }


    if (isset($_POST["benefits"])) {
        if (empty($_POST["benefits"])) {
            $arrayError["benefits"] = "Veuillez indiquer un ou des biens faits";
        }
    }

    if (isset($_POST["contraindication"])) {
        if (empty($_POST["contraindication"])) {
            $arrayError["contraindication"] = "Veuillez indiquer un ou des biens faits";
        }
    }

    if (isset($_POST["time"])) {
        if (empty($_POST["time"])) {
            $arrayError["time"] = "Veuillez indiquer un ou des biens faits";
        }
    }

    if (isset($_POST["price"])) {
        if (empty($_POST["price"])) {
            $arrayError["price"] = "Veuillez indiquer un ou des biens faits";
        }
    }
    var_dump($arrayError);
    if (count($arrayError) == 0) {
        // strtoupper = en majuscule / ucwords = 1ere lettre en majuscule
        $name = htmlspecialchars(strtoupper(trim($_POST['name'])));
        $description = htmlspecialchars(trim($_POST['description']));
        $price = htmlspecialchars(trim($_POST['price']));
        $time = htmlspecialchars(trim($_POST['time']));
        $picture = htmlspecialchars(trim($_POST['pictureToUpload']));
        $miniature = htmlspecialchars(trim($_POST['miniToUpload']));
        $catId = htmlspecialchars(trim($_POST['categories']));
        $intro = htmlspecialchars(trim($_POST['intro']));

        //Je creer un nouveau service puis je recupere son ID à l'aide de la methode addService
        $Services = new Services();
        $idService = $Services->addService($name, $intro, $description, $price, $time, $picture, $miniature, $catId);

        //Je recupere les benefice sous forme de tableau, et j'effectue une boucle pour lancer la methode addService
        foreach ($_POST['benefits'] as $benefit) {
            $addBenefitsToService = new Services();
            $addBenefitsToService->addBenefitsToService($benefit, $idService);
        }

        //Je recupere les contres indications sous forme de tableau, et j'effectue une boucle pour lancer la methode addService 
        foreach($_POST['contraindication'] as $contraindication){
            $addContraindicationToService = new  Contraindication();
            $addContraindicationToService->addContraindicationToService($idService, $contraindication);
    
    
        }       
              $addServicesOk = true;
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


if (isset($_GET["benefits"])) {
    $category = new Benefits();
    $arrayBenCat = $category->getBenefitsByCategory($_GET["benefits"]);
};
