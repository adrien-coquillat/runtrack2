<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
      $x=1;
      while ($x <= 100){
        for ($x=1; $x <= 20; $x++) {
          echo ("<i>" . $x . "</i><br/>");
        }
        for ($x=21; $x <= 24; $x++) {
          echo ($x . "<br/>");
        }
        for ($x=25; $x <= 50; $x++) {
          if ($x == 42) {
            echo "LaPlateforme_<br/>";
          }
          else {
            echo ("<u>" . $x . "</u><br/>");
          }
        }
        for ($x=51; $x <=100 ; $x++) {
          echo ($x . "<br/>");
        }
      }
    ?>
</body>

</html>