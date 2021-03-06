<?php
        
        $adminConnexionOk = 0;
// Nous verifions que l'utilisateur a bien cliqué sur le bouton submit
if (isset($_POST['btn-connexion'])) {

    // On vérifie que les POST ne sont pas vides
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $arrayError["login"] = "Nom d'utilisateur ou mot de passe incorrect";
        $arrayError["password"] = "Nom d'utilisateur ou mot de passe incorrect";

        // On stock les post dans des variables explicites
        $login = $_POST['login'];
        $password = $_POST['password'];

        // on test si la clef $login existe bien dans notre tableau $users
        if (array_key_exists($login, $adminArray)) {
            

            // on compare le mdp avec le mdp stocké à l'aide de la fonction password verify
            if (password_verify($password, $adminArray[$login]['password'])) {
                // Recuperation du login et du cota lors de la connexions 
                session_start();
                $_SESSION['login'] = $_POST['login'];
                $adminConnexionOk = 1;
            } else {
                echo 'Mot de passe incorrect';
            }
        } else {
            echo 'Nom d utilisateur incorrect';
        }
    } else {
        echo 'il manque un / des champ(s)';
    }
}
