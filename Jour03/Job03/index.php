<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $str = "I'm sorry Dave I'm afraid I can't do that"; //chaine de caractere
    for ($i = 0; isset($str[$i]); $i++) { //pour une valeur 0 pour I ; isset permet de savoir si il y a une valeur, si c'est non la boucle est fermée; +1+1+1etc
        $val = $str[$i];
        if ($val == "a" || $val == "e" || $val == "i" || $val == "o" || $val == "u" || $val == "y" || $val == "I" || $val == "A") {
            echo $val;
        }
    }
    
    ?>
</body>

</html>