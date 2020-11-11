<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
 
    function leetspeak($str)
    {
        $newstr = str_split($str); 
        $resultat = "";
        foreach($newstr as $lettre){
            switch(strtolower($lettre)) {
           
            case "a":
                $resultat = $resultat . "4";
                break;
            case "b":
                $resultat = $resultat . "8";
                break;
            case "e":
                $resultat = $resultat . "3";
                break;
            case "g":
                $resultat = $resultat . "6";
                break;
            case "l":
                $resultat = $resultat . "1";
                break;
            case "s":
                $resultat = $resultat . "5";
                break;
            case "t":
                $resultat = $resultat . "7";
                break;
            default:
                $resultat = $resultat . $lettre;
            break;
            }
        }
        return $resultat;
        
    
}



    echo(leetspeak("Bonjour Madame monsieur Le President"));





    ?>
</body>

</html>