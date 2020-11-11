<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $monTab = [200, 204, 173, 98, 171, 404, 459]; //tableau qui contient des valeurs, qui commence par l'index 0.1.2.... (dépend du nombre de données)
    $tailleTableau = count($monTab); // compte le nombre d'éléments du tableau et la stock dans la variable
    for ($i = 0; $i < $tailleTableau - 1; $i++) { //initialise la boucle qui parcour le tableau a partir de $i; condition pour arreter la boucle a l'aide de la variable créer plus haut ; $i++ boucle +1 +1 
        $val = $monTab[$i]; //on stock la valeur courante à l'index $i dans la variable $val : ma valeur du tableau a l'index $1 = 0 est 200
        if ($val % 2 == 0) { //condition pour dire qu'il est paire
            echo $val . " est paire <br/>";
        } else { //sinon impaire
            echo $val . "est impaire <br/> ";
        }
    }



    //affiche sa valeur                           echo $tailleTableau; 
    //affiche le tableau en ligne                 print_r($monTab); 
    //affiche le tableau en colonne               var_dump($monTab); 
    //affiche la valeur à l'index choisi          echo $monTab[0]; 

    ?>
</body>

</html>