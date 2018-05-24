<?php

        if (isset ($_POST["sexe"]) && isset ($_POST["prenom"]) && isset($_POST["nom"])) {
        $sexe = $_POST["sexe"];
        $prenom = (string) $_POST ["prenom"];
        $nom = (string) $_POST ["nom"];
        $email = (string) $_POST ["mail"];
        $remember = $_POST ["remember"];
      }


    if (isset($remember)) {
     $remember = "se souvenir de moi";
    }

    else {
      $remember = 'ne pas se souvenir de moi';
    }

        $message =

        '<h2>Demande prise en compte</h2>
        <p>Titre : ' . $sexe . '.</p>
        <p>Prénom : ' .  $prenom . '.</p>
        <p>Nom : ' . $nom . '.</p>
        <p>E-mail : ' . $email . '.</p>
        <p>' . $remember .'.</p>';

        $message2 = 'Demande prise en compte
        Titre : ' . $sexe . '
        Prénom : ' . $prenom . '
        Nom : ' . $nom . '
        E-mail : ' . $email . '
        ' . $remember .'.';

    echo $message2;

          mail('talla.m.seck@gmail.com','formulaire',$message)



?>
