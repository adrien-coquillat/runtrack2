<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str = "Dans l'espace, personne ne vous entend crier"; //chaine de caractère
    $strarray = str_split($str); //transformer la chaine de caractere en tableau 
    $val = 0; //création du compteur 
    foreach ($strarray as $i) {  //pour chaque element present dans une table  / comme / $c 
        $val++;
    }
    echo ($val);
    ?>
    

</body>

</html>