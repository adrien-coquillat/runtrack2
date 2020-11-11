<?php
if (isset($_POST['effacer'])) {
    unset($_COOKIE['nbvisites']);
    header('Location: index.php');
}
if (isset($_COOKIE['nbvisites'])) {
    setCookie('nbvisites', $_COOKIE['nbvisites'] + 1);

    echo 'Vous avez visité ', $_COOKIE['nbvisites'], ' fois ce site';
} else {
    setCookie('nbvisites', 1);
    echo 'Vous avez visité ', 1, ' fois ce site';
}

?>
<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post" action="index.php">
        <input type="submit" name="effacer">
    </form>

</body>

</html>