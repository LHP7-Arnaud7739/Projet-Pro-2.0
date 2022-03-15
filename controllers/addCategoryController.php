<?php 
require '../config.php';
require '../models/DataBase.php';
require '../models/services.php';


if (isset ($_GET["benefits"])){
    $category = new Benefits();
    $arrayBenCat = $category->getBenefitsByCategory($_GET["benefits"]);

};


