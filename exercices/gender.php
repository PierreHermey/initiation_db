<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Gender</title>
</head>
<body>
<h1> Initiation aux bases de données </h1>
<?php require "connexion.php";?>
<h2>Nombre de femmes et d'hommes</h2>
<table>
<?php 
    $gender = $bdd->query('SELECT gender, COUNT(gender) FROM first_db GROUP BY gender ORDER BY COUNT(gender) ASC');

    while ($donnees = $gender->fetch())
{

    echo '<tr><td>'.$donnees['gender'].'</td><td>'.$donnees['COUNT(gender)'].'</td></tr>'; '<br />';

}
$gender->closeCursor(); // Termine le traitement de la requête
?>
</table>
</body>
</html>