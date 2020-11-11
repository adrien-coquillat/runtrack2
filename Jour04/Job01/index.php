<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $i = 0;
    foreach ($_GET as $argument) {
        $i++;
        echo ("<p> element:" . $argument . "</p>");
    }
    echo ("nombre d'élément" . $i);


    ?>
    <form action="index.php" method="get" name="formulaire">
        <label for="identifiant">Nom de compte:</label>
        <input type="text" name="identifiant"><br>
        <label for="mdp">Mot de passe:</label>
        <input type="text" name="identifiantmdp"><br>
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="exemple@exemple.com"><br>
        <input type="submit" value="Valider">
    </form>
</body>

</html>