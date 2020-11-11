<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.'; //tableau qui contient des valeurs, qui commence par l'index 0.1.2.... (dépend du nombre de données)
    $char = strlen($str); // fonction qui compte le nombre d'éléments du $str et la stock dans la variable
    for ($i = 0; $i < $char + 1; $i = $i + 2) { //initialise la boucle qui parcour le tableau a partir de $i; condition pour arreter la boucle a l'aide de la variable créer plus haut ; $i++ boucle +1 +1 
        $val = $str[$i]; //on stock la valeur courante à l'index $i dans la variable $val : ma valeur du tableau a l'index $1 = 0 est T
        echo $val;
    }



    

    //affiche sa valeur                           echo $tailleTableau; 
    //affiche le tableau en ligne                 print_r($monTab); 
    //affiche le tableau en colonne               var_dump($monTab); 
    //affiche la valeur à l'index choisi          echo $monTab[0]; 

    ?>
</body>

</html>