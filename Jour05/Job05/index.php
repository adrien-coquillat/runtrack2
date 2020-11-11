<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function occurrences($str,$char){
        $compteur= 0;
    for ($i = 0; isset($str[$i]) ; $i++) {  
    
        if (strtolower($char) == strtolower($str[$i])){
           $compteur ++;
    }
    }
    return $compteur;
    }
echo occurrences("Caca","C")

  

    ?>
</body>

</html>