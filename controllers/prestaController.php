<?php
require '../config.php';
require '../models/DataBase.php';
require '../models/services.php';

if (isset($_GET["category"])) {
    $presta = new Prestation();
    $arrayPresta = $presta->getPrestaByCategory($_GET["category"]);
    

};

