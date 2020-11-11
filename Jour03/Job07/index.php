<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice tableau</title>
</head>

<body>
    <?php

    $str = "Certaines choses changent, et d'autresne changeront jamais";  //56characte
    $strarray = str_split($str); // $strarray est un tableau fait a partir de la chaine $str

    $resultat = ""; //chaine vide initialisée

    for ($i = (sizeof($strarray) - 1); $i >= 0; $i--) { // sizeof, un équivalent a strlen compte a partir de 1 , on met -1 pour avoir le meme nbr de valeur/index
        if ($i == (sizeof($strarray) - 1)) { //si $i strictement egal a $strarray lenght C n'est plus au début 
            $resultat = $strarray[0];
        } else {                              // sinon $resultat prend sa valeur précédente incrémenté de $i+1 tandis que $i-- à chaque boucle(donc il prend la valeur du remplacent) 
            $resultat = $strarray[$i + 1] . $resultat;
        }
    }

    echo ($resultat); // on affiche notre nouvelle chaine
    ?>
</body>

</html>