<?php
require '../config.php';
require '../models/DataBase.php';
require '../models/services.php';

if (isset($_GET["category"])) {
    $presta = new Prestation();
    $arrayPresta = $presta->getPrestaByCategory($_GET["category"]);
    

};
if (isset($_POST["deleteService"])) {
    $Ser_id = htmlspecialchars(trim($_POST["deleteService"]));
    $prestaObj = new Prestation();
    $prestaInfo = $prestaObj->deletePresta($Ser_id);
    $arrayPresta = $presta->getPrestaByCategory($_GET["category"]);
};


