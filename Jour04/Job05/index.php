<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="index.php" method="post" name="formulaire">
        <label for="username">username:</label>
        <input type="text" name="username"><br>
        <label for="password">password:</label>
        <input type="password" name="password"><br>

        <input type="submit" name="bouton">
    </form>

    <?php

    if (isset($_POST['bouton'])) {

        if ($_POST['username'] == "John" && $_POST['password'] == "Rambo") {
            echo ("C'est pas ma guerre");
        } else {
            echo ("Votre pire cauchemar");
        }
    }
    ?>
</body>

</html>