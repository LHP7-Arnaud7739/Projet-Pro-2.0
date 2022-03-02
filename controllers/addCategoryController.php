<?php 
require '../config.php';
require '../models/DataBase.php';
require '../models/services.php';

var_dump($_GET);
if (isset ($_GET["benefits"])){
    $category = new Benefits();
    $arrayBenCat = $category->getBenefitsByCategory($_GET["benefits"]);

};


