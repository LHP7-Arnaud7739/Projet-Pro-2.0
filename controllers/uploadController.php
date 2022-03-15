<?php
//? on créer un tableau contenant tout les fichiers 
$allFiles = scandir('../assets/img/uploadPictures/');
$usersPicture = [];
//? on parcours le tableau allFiles et lorsque la value contient le login
//? on stock la value dans le tableau usersPicture
foreach ($allFiles as $value) {
    if (stristr($value, $_SESSION['login'] . '_')) {
        array_push($usersPicture, $value);
    }
}
//? on compte les elements dans le tableau usersPicture
$totalPicture = count($usersPicture);
//?
if (isset($_POST['submit'])) {
   
    $maxSize = 1000000;

    if ($_FILES['fileToUpload']['error'] > 0) {
        $messageInfo =  'Désolé, une erreur est produite lors du téléchargement de votre fichier.';
    } else {
        $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
        $filesName = $_FILES['fileToUpload']['name'];
        $fileExt =
            '.' . strtolower(substr(strrchr($filesName, '.'), 1));

        if ($check !== false) {

            if ($_FILES['fileToUpload']['size'] > $maxSize) {
                $messageInfo =  'Désolé, votre fichier est trop volumineux.';
            } else {
                $tmpName = $_FILES['fileToUpload']['tmp_name'];
                $uniqueName = uniqid(rand(), true);
                $fileName = '../assets/img/' . $_SESSION['login'] . "_" . $uniqueName . $fileExt;
                $resultat = move_uploaded_file($tmpName, $fileName);
                if ($resultat) {
                    $messageDetail =  'Le fichier est une image -' . $check['mime'] . '.';
                    $messageInfo =  'Votre image <b class="text-success">' . $filesName. '  </b>a bien était uploadée!';
                }
            }
        } else {
            $messageInfo =  'Le fichier n\'est pas une image.';
        }
    }
}
?>