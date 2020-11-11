<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET" name="str">
        <label for="str">username:</label>
        <input id="str" type="text" name="str"><br>

        <select name="“fonction”">
            <option>gras</option>
            <option>cesar</option>
            <option>plateforme</option>
        </select><br>

        <input type="submit" name="bouton">
    
    <?php

    // Créez un formulaire qui contient un input nommé “str” de type text, une liste
    // déroulante (select) nommée “fonction” et un bouton submit. Lorsque vous
    // validez le formulaire, vous devez appliquer des transformations à “str” en
    // fonction de l’option choisie dans la liste déroulante. Les choix possibles
    // sont :
    // - “gras” : une fonction qui prend en paramètre “str”. Elle écrit “str” en
    // mettant en gras (<b>) les mots commençant par une lettre majuscule.
    // - “cesar” : une fonction qui prend en paramètre “str” et un nombre
    // “decalage” (qui vaut 2 par défaut). La chaine est affichée en décalant
    // chaque caractère d’un nombre égal à “decalage”.
    // ex : si decalage vaut 1, e devient f. Si décalage vaut 3, z devient c.
    // - “plateforme”, une fonction qui prend en paramètre “str”. Elle écrit “str”
    // en ajoutant un “_” aux mots finissant par “me”.

    function gras($str)
    {
        $up = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

        for ($i = 0; isset($str[$i]); $i++) {
            $signal = 0;
            foreach ($up as $maj) {
                if ($str[$i] == $maj) {
                    $signal = 1;
                    while ($str[$i] != " ") {
                        echo "<b>" . $str[$i] . "</b>";
                        if (isset($str[$i + 1]) == false) {
                            break;
                        }

                        $i++;
                    }
                }
            }
            if ($str[$i] == ' ' && $signal == 1)
                return $str[$i];

            if ($signal == 0) {
                return $str[$i];
            }
        }
    }

   
    function cesar($str, $decalage = 2)
    {
        $resultat = "";
        for ($i = 0; isset($str[$i]); $i++) {
            $currentLetter = $str[$i];
            if ($currentLetter !== " ") {
                $isMajCurrentLetter = isMajuscule($currentLetter);
                $decaled = getLetterWithDecalage($currentLetter, $isMajCurrentLetter, $decalage);
                $resultat = $resultat . $decaled;
            } else {
                $resultat = $resultat . " ";
            }
        }

        return $resultat;
    }


    function isMajuscule($letter)
    {
        $alphaMaj = getArrays()["alphaMaj"];
        $res = false;
        foreach ($alphaMaj as $key => $value) {
            if ($value === $letter) {
                $res = true;
            }
        }

        return $res;
    }


    function getLetterWithDecalage($letter, $isMajuscule, $decalage)
    {
        $indexTrouve = -1;
        $arrays = getArrays();
        if ($isMajuscule == true) {
            $tableauDeRecherche = $arrays['alphaMaj'];
        } else {
            $tableauDeRecherche = $arrays['alpha'];
        }

        foreach ($tableauDeRecherche as $key => $value) {

            if ($value == $letter) {
                $indexTrouve = $key;
            }

            if ($indexTrouve + $decalage > 25) {
                if ($decalage > 26) {
                    $decalage = $decalage % 26;
                }
                $newIndex = ($indexTrouve + $decalage) - 25 - 1;
            } else {
                $newIndex = $indexTrouve + $decalage;
            }
        }

        return $tableauDeRecherche[$newIndex];
    }

    function getArrays()
    {
        $alphaMaj = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
        $alpha = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        $arr = [];
        $arr["alphaMaj"] = $alphaMaj;
        $arr["alpha"] = $alpha;

        return $arr;
    }

    cesar("a B c D e z", 104);
    function plateforme($string)
    {
        $i = 0;
        $formatedString = "";
        while ($i < strlen($string)) {
            if ($string[$i] == 'm' && $string[$i + 1] == 'e') {
                $formatedString = $formatedString . $string[$i] . $string[$i + 1] . "_ ";
                $i += 3;
            }
            $formatedString = $formatedString . $string[$i];
            $i++;
        }
        return $formatedString;
    }

    if (isset($_GET["fonction"]) && isset($_GET["str"])) {

        switch ($_GET["fonction"]) {
            case 0:
                print_r(gras($_GET["str"]));
                break;
            case 1:
                echo (cesar($_GET["str"]));
                break;
            case 2:
                echo (plateforme($_GET["str"]));
                break;
            default:
                break;
        }
    }
    ?>
</form>

</body>

</html>