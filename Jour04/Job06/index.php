<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="get" name="formulaire">
        <label for="nombre">nombre</label>
        <input type="text" name="nombre"><br>
        <input type="submit" name="submit">
    </form>
    <?php
    //isset joue le role " de faux booleen" pour dire si c'est vrai ou pas qu'il y a des caractères. 
      if(isset($_GET['submit'])) {
        if ($_GET["nombre"]%2==0) {
          echo "Nombre pair";
        }
        else {
          echo "Nombre impair";
        }
      }
     ?>
</body>

</html>