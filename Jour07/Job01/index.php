<?php
session_start();
if (isset($_POST['effacer'])) {
    unset($_SESSION['nbvisites']);
    header('Location: index.php');
}
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    $_SESSION['nbvisites']++;

}
    echo "La page est visitées : " . $_SESSION['nbvisites'] . " fois !";

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