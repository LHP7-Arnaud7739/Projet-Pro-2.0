<?php

require_once '../config.php';
require_once '../models/DataBase.php';
require_once '../models/Patient.php';

var_dump($_POST);

$regexNom = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,30}$/";
$regexPseudo = "/^[0123456789a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð,.'-]{2,30}$/";
$regexMail = "/^([a-z.-]+)@([a-z]+).([a-z]){2,4}$/";

$regexDate = "/^[0-9\-]+$/";
$regexPhone = "/^(?:(?:\+|00)33[\s.-]{0,3}(?:(0)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/";
$arrayError = [];
// creer une variable pour cacher ou montrer ton formulaire
$modifyClientsOk = 0;

if (isset($_POST["idClient"])) {
    $user_id = htmlspecialchars(trim($_POST["idClient"]));
    $clientObj = new Clients();
    $clientInfo = $clientObj->getOneCLient($user_id);
}

if (isset($_POST['updateBtn'])) {
    if (isset($_POST["nom"])) {
        if (empty($_POST["nom"])) {
            $arrayError["nom"] = "Veuillez saisir votre nom";
        } elseif (!preg_match($regexNom, $_POST["nom"])) {
            $arrayError["nom"] = "Format invalide";
        }
    }

    if (isset($_POST["prenom"])) {
        if (empty($_POST["prenom"])) {
            $arrayError["prenom"] = "Veuillez saisir votre prénom";
        } elseif (!preg_match($regexNom, $_POST["prenom"])) {
            $arrayError["prenom"] = "Format invalide";
        }
    }

   

    if (isset($_POST["phone"])) {
        if (empty($_POST["phone"])) {
            $arrayError["phone"] = "Veuillez saisir votre numéro de telephone";
        } elseif (!preg_match($regexPhone, $_POST["phone"])) {
            $arrayError["phone"] = "Format invalide";
        }
    }

    $clientMail = new CLients();
    if (isset($_POST["mail"]) && $_POST["mail"] != $_POST["oldMail"]) {
        if (empty($_POST["mail"])) {
            $arrayError["mail"] = "Veuillez saisir votre Mail";
        } elseif (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
            $arrayError["mail"] = "Le format de votre mail est invalide";
        } elseif (!$clientMail->checkFreeMail($_POST['mail'])) {
            $arrayError["mail"] = "Cette adresse mail est déjà utilisée";
        }
    }

    if (count($arrayError) == 0) {
        // strtoupper = en majuscule / ucwords = 1ere lettre en majuscule
        $lastname = htmlspecialchars(strtoupper(trim($_POST['nom'])));
        $firstname = htmlspecialchars(ucwords(trim($_POST['prenom'])));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $mail = htmlspecialchars(trim($_POST['mail']));
        $user_id = htmlspecialchars(trim($_POST['user_id']));

        $client = new Clients();
        $client->modifyClients($user_id, $lastname, $firstname, $phone, $mail );
        $clientInfo = $clientObj->getOneClient($user_id);
        $modifyClientsOk = 1;
    }

    if (isset($_POST["modifyBtn"])) {
        $user_id = htmlspecialchars(trim($_POST["user_id"]));
        $clientObj = new Clients();
        $clientInfo = $clientObj->getOneClient($user_id);
    }
}
