<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>
        <table>
            <thead>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>

                <?php
                if (isset($_GET)) {
                    $i = 0;

                    foreach ($_GET as $key => $argument) {
                        $i++;
                        echo ("<tr><td>" . $key . "</td><td>" . $argument . "</td></tr>");
                    }
                }
                ?>

            </tbody>
        </table>


        <form action="index.php" method="get" name="formulaire">
            <label for="identifiant">Nom de compte:</label>
            <input type="text" name="identifiant"><br>
            <label for="mdp">Mot de passe:</label>
            <input type="text" name="mdp"><br>
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="exemple@exemple.com"><br>
            <input type="submit" value="Valider">
        </form>
    </body>

</html>