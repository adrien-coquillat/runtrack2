<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $vraifaux = false;
    $entier = 1;
    $nbrvirgule = 1.5;
    $chainedecaractere = "Vive LaPlateforme";
    ?>
    
    <table>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        <tr>
            <td><?php echo gettype($vraifaux); ?></td>
            <td><?php echo "vraifaux" ?></td>
            <td><?php echo $vraifaux; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($entier); ?></td>
            <td><?php echo "entier" ?></td>
            <td><?php echo $entier; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($chainedecaractere); ?></td>
            <td><?php echo "chainedecaractere" ?></td>
            <td><?php echo $chainedecaractere; ?></td>
        </tr>
        <tr>
            <td><?php echo gettype($nbrvirgule); ?></td>
            <td><?php echo "nbrvirgule" ?></td>
            <td><?php echo $nbrvirgule; ?></td>
        </tr>

    </table>

</body>

</html>