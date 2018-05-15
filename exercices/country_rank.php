<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>country rank</title>
</head>
<body>
<h1> Initiation aux bases de données </h1>
<?php require "connexion.php";?>
<h2>Classement des pays par inscriptions</h2>
<table>
<?php 
    $rank = $bdd->query('SELECT country_code, COUNT(country_code) FROM first_db GROUP BY country_code ORDER BY COUNT(country_code) ASC');

    while ($donnees = $rank->fetch())
{

    echo '<tr><td>'.$donnees['country_code'].'</td><td>'.$donnees['COUNT(country_code)'].'</td></tr>'; '<br />';

}
$rank->closeCursor(); // Termine le traitement de la requête
?>
</table>
</body>
</html>