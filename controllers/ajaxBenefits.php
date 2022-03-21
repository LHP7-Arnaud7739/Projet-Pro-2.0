<?php
require '../config.php';
require '../models/DataBase.php';
require '../models/services.php';

if (isset($_GET['getBenefits']) && ctype_digit($_GET['getBenefits'])) {
    $cat_id = intval($_GET['getBenefits']);
    $services = new Services();
    $benefits = $services->selectBenefitsByCategories($cat_id);
    echo (json_encode($benefits, JSON_UNESCAPED_UNICODE));
}
