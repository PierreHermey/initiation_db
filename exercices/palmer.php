<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>PALMER</title>
</head>
<body>
<h1> Initiation aux bases de données </h1>
<?php require "connexion.php";?>
<h2> 1 - Personnes dont le Nom est "Palmer"</h2>
<table>
<?php
    $palmer = $bdd->query('SELECT * FROM first_db WHERE last_name="palmer"');
while ($donnees = $palmer->fetch())
{
    echo '<tr><td>'.$donnees['id'].'</td><td>'.$donnees['first_name'].'</td><td>'.$donnees['last_name'].'</td><td>'.$donnees['email'].'</td><td>'.$donnees['gender'].'</td><td>'.$donnees['ip_address'].'</td><td>'.$donnees['birth_date'].'</td><td>'.$donnees['zip_code'].'</td><td>'.$donnees['avatar_url'].'</td><td>'.$donnees['state_code'].'</td><td>'.$donnees['country_code'].'</td></tr>'; '<br />';
}
$palmer->closeCursor(); // Termine le traitement de la requête
?>
</table>
</body>
</html>