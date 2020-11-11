<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    for ($i = 1; $i <= 1000; $i++) // Boucle For qui créer, initialise, et incrémente $i

    {
        $n = true; // $n est un booléen qui contient l'information si $i est premier ou non 
        for ($j = 2; $j < $i; $j++) { // Boucle For qui créer, initialise, et incrémente $j, vérificateur de nombre premier
            if ($i % $j == 0) {  // Condition If vérifie si $j est un divisuer de $i
                $n = false; // $n est un booléen qui contient l'information si $i est premier ou non 
            }
        }
        if ($n) { // Condition If permet d'afficher $i si $n est vrai, donc un nombre premier
            echo $i . "<br />";
        }
    }
    ?>
</body>

</html>