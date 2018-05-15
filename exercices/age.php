<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Age</title>
</head>
<body>
    <h1> Initiation aux bases de données </h1>
    <?php require "connexion.php";?>
    <h2>Ages</h2>
    <table>
    <?php

    $reponse = $bdd->query('SELECT last_name, birth_date, CURDATE(), TIMESTAMPDIFF(YEAR,birth_date,CURDATE()) AS age 
    FROM first_db WHERE birth_date is not NULL;');
    
        while ($donnees = $reponse->fetch())
        {
            echo '<tr><td>'.$donnees['last_name'].'</td><td>'.$donnees['age'].'ans</td></tr>'; '<br />';
        }
        $reponse->closeCursor();
    
    ?>
    </table>
    <h2>Moyennes d'ages Hommes/Femmes</h2>
    <table>
    <?php

    $moy = $bdd->query('SELECT gender, YEAR(NOW())-AVG(YEAR(birth_date)) AS moy_age from first_db where birth_date not in ("0000-00-00") GROUP BY gender ');

	while ($donnees = $moy->fetch())
	{
		echo '<tr><td>'.$donnees['gender'].'</td><td>'.ROUND($donnees['moy_age']).'Ans</td></tr><br>';
	}
	

	$moy->closeCursor();
    
    ?>
    </table>
</body>
</html>