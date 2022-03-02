<?php
require '../config.php';
require '../models/DataBase.php';
require '../models/services.php';

var_dump($_GET);
if (isset ($_GET["category"])){
    $presta = new Prestation();
    $arrayPresta = $presta->getPrestaByCategory($_GET["category"]);

};









