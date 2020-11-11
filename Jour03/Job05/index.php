<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>


        <?php
        $str = "On n est pas le meilleur quand
    on le croit mais quand on le sait";
        $strarray = str_split($str);
        $dic = array(
            "consonne" => array("b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x"),
            "voyelle" => array("a", "e", "i", "o", "u", "y")
        );
        $voyellescompte = 0;
        $consonnescompte = 0;
        foreach ($strarray as $lettre) {
            foreach ($dic as $Type) {
                foreach ($Type as $comparetype) {
                    if ($comparetype == strtolower($lettre)) {
                        if ($Type[0] == 'b') {
                            $consonnescompte++;
                        } elseif ($Type[0] == 'a') {
                            $voyellescompte++;
                        }
                    }
                }
            }
        }
        echo ("<tbody> <tr> <th> " . $consonnescompte . " </th>  <th> " . $voyellescompte . " </th> </tr> </tbody>");
        ?>
    </table>
</body>

</html>