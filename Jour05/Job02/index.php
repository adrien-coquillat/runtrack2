
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice tableau</title>
</head>

<body>
    <?php
    // Créez une fonction nommée “bonjour”. Cette fonction prend en paramètre
    // un booléen nommé “jour”. Si le paramètre “jour” vaut true, la fonction doit
    // afficher “Bonjour”, si “jour” vaut false, la fonction doit afficher “Bonsoir”.
    
function bonjour($bool){
   if($bool){// if bool == 1
       return "bonjour";//retourner la valeur bonjour
   }
   return "bonsoir";// sinon return bonsoir

}
$isTimeDay= true;
echo(bonjour($isTimeDay));

    ?>
</body>

</html>