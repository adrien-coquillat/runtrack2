<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice tableau</title>
</head>

<body>
    <?php

    $str = "Les choses que l'on possede finissent par nous posseder";
    $strarray = str_split($str); //$str "devient" un tableau dans $strarray


    for ($i = (sizeof($strarray) - 1); $i >= 0; $i--) { // en partant de la fin, on énumere jusqu'a l'index 0
        echo $str[$i]; // on affiche chaque index en partant de la fin
    }                   // le resultat est $str inversé

    ?>
</body>

</html>