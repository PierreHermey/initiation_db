<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Apprenants</title>
</head>
<body>
    <h1> Initiation aux bases de données </h1>
<?php require "connexion.php";?>
    <h2>Apprenants et leurs départements</h2>
<table>
<?php
    $apprenants = $bdd->query('SELECT * FROM apprenants INNER JOIN departement ON apprenants.id_departement = departement.departement_code');

    while ($donnees = $apprenants->fetch())
	{
		echo '<tr><td>'.$donnees['prenom'].'</td><td>'.$donnees['departement_code'].'</td><td>'.$donnees['departement_nom'].'</td></tr>';
	}
	$apprenants->closeCursor();
?>
</table>
</body>
</html>