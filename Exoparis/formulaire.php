<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


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
?>
        $message = <table>
          <tr>
             <th><label>Titre:<span class="ast">*</span></label></th>
             <th>'<p> . $sexe . '</p></tr>
          <tr>
            <td><label>Prénom:<span class="ast">*</span></label></td>
            <td> <p>' .  $prenom . '</p> </tr>
          <tr>
            <td><label>Nom:<span class="ast">*</span></label></td>
            <td> <p>' . $nom . '</p> </td>
          </tr>
          <tr>
            <td>email:</td>
            <td> <p>' . $email . '</p> </tr>
        </table>

<?php
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
</body>
</html>
