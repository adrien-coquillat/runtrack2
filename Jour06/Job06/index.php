<!-- Créez un formulaire qui contient une liste déroulante nommé “style” et un
bouton submit. La liste déroulante doit proposer au moins “style1”, “style2”
et “style3. Créez 3 fichiers css nommés “style1.css”, “style2.css” et
“style3.css”. Chaque style doit avoir des effets sur le design du formulaire,
la couleur de background, la police d’écriture...
Lorsque l’on valide le formulaire, le style sélectionné doit être inclu et donc
changer le visuel. -->

<!-- Créez un formulaire qui contient une liste déroulante nommé “style” et un
bouton submit. La liste déroulante doit proposer au moins “style1”, “style2”
et “style3. Créez 3 fichiers css nommés “style1.css”, “style2.css” et
“style3.css”. Chaque style doit avoir des effets sur le design du formulaire,
la couleur de background, la police d’écriture...
Lorsque l’on valide le formulaire, le style sélectionné doit être inclu et donc
changer le visuel. -->

<?php 
 $style=null;// je donne une valeur null a ma variable qui correspond a mon style 
 if (isset($_GET['style'])) {

    if ($_GET['style'] == "style1") {
        $style="style1.css";
    } 
    if ($_GET['style'] == "style2") {
        $style="style2.css";
    } 
    if ($_GET['style'] == "style3") {
        $style="style3.css";
    } 
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href= <?php echo $style ?>> 
<!-- j echo ma variable style  -->
</head>
<body>
    <form action="index.php" method="GET" name="style">
    
        <select name="style">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
            <option value="style3">style3</option>
        </select><br>

        <input type="submit" name="bouton">
    </form>
</body>
</html>
