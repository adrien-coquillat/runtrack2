<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($x = 0; $x <= 1337; $x++) {
        if ($x === 42) {
            echo ("<u><strong>" .$x.  "</strong></u> <br/>");
        } else {
            echo ($x . " <br/>");
        }
    }

    ?>

</body>

</html>