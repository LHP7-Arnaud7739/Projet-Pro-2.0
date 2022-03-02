<?php
$login = 'Arnaud7739';
$password = 'Arnaud7739';



if (!empty($_POST)) {
    if (empty($_POST["login"]) || empty($_POST["password"])) {
        $arrayError["error"] = "Veuillez saisir votre mot de passe et/ou login";
    } elseif (!password_verify($_POST["login"], $login) && !password_verify($_POST["password"], $password)) {
        $arrayError["error"] = "Mot de passe ou login invalide";
    } else {
        header("Location: welcome.php");
        exit;
    }
}
