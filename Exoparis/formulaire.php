<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
        $sexe = $_POST["sexe"];
        $prenom = $_POST["prenom"];
        $nom = $_POST["nom"];
        $email = $_POST["email"];

    if (isset($_POST["remember"])) {
     $remember = "se souvenir de moi";
     $souvenir = 1;
    }

    else {
      $remember = 'ne pas se souvenir de moi';
      $souvenir = 0;
    }

  echo $sexe;
  echo $prenom;
  echo $nom;
  echo $email;

$link = mysqli_connect("localhost","root","","Formulaire");

if($link === false){
  die("Connection failed: " . mysqli_connect_error());
}
$sql= "INSERT INTO Formulaire(Titre, Prenom, Nom, Email, Souvenir, Dateinsert) VALUES
('$sexe','$prenom','$nom','$email','$souvenir',NOW())";

if(mysqli_query($link,$sql)){
echo "good";
}else {
  echo "bad" . mysqli_error($link);
}

if($email === SELECT * FROM Formulaire){
  echo "Doublons";
}
else {
  echo "Unique";
}

mysqli_close($link);

?>



</body>
</html>
