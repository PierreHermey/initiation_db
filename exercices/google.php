<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>GOOGLE</title>
</head>
<body>
<h1> Initiation aux bases de données </h1>
<?php require "connexion.php";?>
<h2> 4 - Affichages des adresses contenant google</h2>
<table>
<?php
    $google = $bdd->query('SELECT * FROM first_db WHERE email LIKE "%google%"');
while ($donnees = $google->fetch())
{
    echo '<tr><td>'.$donnees['id'].'</td><td>'.$donnees['first_name'].'</td><td>'.$donnees['last_name'].'</td><td>'.$donnees['email'].'</td><td>'.$donnees['gender'].'</td><td>'.$donnees['ip_address'].'</td><td>'.$donnees['birth_date'].'</td><td>'.$donnees['zip_code'].'</td><td>'.$donnees['avatar_url'].'</td><td>'.$donnees['state_code'].'</td><td>'.$donnees['country_code'].'</td></tr>'; '<br />';
}
$google->closeCursor(); // Termine le traitement de la requête
?>
</table>
</body>
</html>