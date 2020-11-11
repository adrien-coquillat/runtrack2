<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($x = 0; $x < 1338; $x++) {
        if ($x == 26 | $x == 37 | $x == 88 | $x == 1111 | $x == 1233) {
            echo ("");
        } else {
            echo ($x . "<br/>");
        }
    }

    ?>

</body>

</html>