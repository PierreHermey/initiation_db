<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>STATE N</title>
</head>
<body>
<h1> Initiation aux bases de données </h1>
<?php require "connexion.php";?>
<h2> 3 - Affichages des etats commençants par N</h2>
<table>
<?php
    $state = $bdd->query('SELECT * FROM first_db WHERE state_code LIKE "N%"');
while ($donnees = $state->fetch())
{
    echo '<tr><td>'.$donnees['id'].'</td><td>'.$donnees['first_name'].'</td><td>'.$donnees['last_name'].'</td><td>'.$donnees['email'].'</td><td>'.$donnees['gender'].'</td><td>'.$donnees['ip_address'].'</td><td>'.$donnees['birth_date'].'</td><td>'.$donnees['zip_code'].'</td><td>'.$donnees['avatar_url'].'</td><td>'.$donnees['state_code'].'</td><td>'.$donnees['country_code'].'</td></tr>'; '<br />';
}
$state->closeCursor(); // Termine le traitement de la requête
?>
</table>
</body>
</html>