<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function calculate($a, $operation, $b)
    {
        switch ($operation) {
            case "+":
                $resultat = $a + $b;
                break;
            case "-":
                $resultat = $a - $b;
                break;
            case "*":
                $resultat = $a * $b;
                break;
            case "/":
                $resultat = $a / $b;
                break;
        }
        return $resultat;
    }



    echo (calculate(2, "+", 8));



    ?>
</body>

</html>