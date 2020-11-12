<!-- En utilisant php et mysqli, connectez-vous à la base de données “jour08”. A
l’aide d’une requête SQL, récupérez le nom et la capacite de chacune des
salles. Affichez le résultat de cette requête dans un tableau html. La
première ligne de votre tableau html doit contenir le nom des champs. Les
suivantes doivent contenir les données présentes dans votre base de
données. -->

<?php 
echo "<table style= 'border: solid 2px black';>";
//debut de mon tableau

$db = mysqli_connect('localhost', 'root', '', 'jour08');
//lance la connexion au serveur avec mon nom du serv, l'identifiant, le mdp et le nom de la table qu'on veut 

$query = mysqli_query($db, 'select * FROM salles');
//on selectionne la table étudiants

$titres = mysqli_fetch_assoc($query);
//on récupere l'entete du tableau + les info du 1er tableau

$all_result = mysqli_fetch_all($query);
//on recupere les autres tableau avec toutes les info

echo "<thead>";
foreach ($titres as $titre => $value) 
{
//on parcours l'entete, avec l'index ici $titre,
    echo "<td>" . $titre . "</td>";
}
echo "</thead>";
echo "<tbody> <tr>";
foreach ($titres as $titre => $value) 
{
//on parcours l'entete et on prend ses valeurs
    echo "<td>" . $value . "</td>";
}
echo "</tr>";




foreach ($all_result as $key => $values) 
{
// on parcours tout les tableau, avec une clef pour avoir toutes les valeurs
    echo "<tr>";
    foreach ($values as $key => $value) 
    {
// on parcours du coup toutes les valeurs et on leur donne un index + une valeur unique
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</tbody>";

echo "</table>";
?>
