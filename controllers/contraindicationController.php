<?php
var_dump($_POST);
require '../config.php';
require '../models/DataBase.php';
require '../models/clients.php';
require '../models/services.php';

$allContraindication = new Contraindication();
$arrayCont = $allContraindication->allContraindication();