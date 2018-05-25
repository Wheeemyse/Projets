<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
        $sexe = $_POST["sexe"];
        $prenom =  $_POST["prenom"];
        $nom = $_POST["nom"];
        $email = $_POST["mail"];

    if (isset($_POST["remember"])) {
     $remember = "se souvenir de moi";
    }

    else {
      $remember = 'ne pas se souvenir de moi';
    }

echo $sexe;
echo $prenom;
echo $nom;
echo $email;
       ?>



</body>
</html>
