<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $date1=date_create("2018/05/22");
      $date2=date_create("1991/02/04");
      $diff=date_diff($date2,$date1);
      echo $diff->format("%R%y ans ");
    ?>
  </body>
</html>
