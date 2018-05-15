<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>SQL Request</title>
</head>
<body>
<h1> Initiation aux bases de données </h1>
<h2> Requètes SQL pour inserer, modifier et supprimer un utilisateur dans la BD</h2>
    <p>INSERT INTO `first_db`(`id`, `first_name`, `last_name`, `email`, `gender`, `ip_address`, `birth_date`, `zip_code`, `avatar_url`, `state_code`, `country_code`)</p>
    <p>VALUES ('1001','Pierre','HERMEY','une_email@google.fr','male','111.111.11.11','03.03.1997',NULL,NULL,NULL,'FR')</p>
    <br/>
    <p>UPDATE `first_db` SET `email`='new_email@google.fr' WHERE last_name='HERMEY'</p>
    <br/>
    <p>DELETE FROM `first_db` WHERE last_name='HERMEY'</p>
</body>
</html>

