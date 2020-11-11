<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($x = 1; $x < 101; $x++) {
        if ($x % 3 == 0 && $x % 5 == 0) { //si x divisé par 3 reste 0 et si x divisé par 5 reste 0 
            echo "FizzBuzz<br/>";
        } elseif ($x % 5 == 0) {//sinon si
            echo "buzz<br/>";
        } elseif ($x % 3 == 0) {
            echo "fizz<br/>";
        } else {
            echo ($x . "<br/>");//sinon
        }
    }
    ?>
</body>

</html>