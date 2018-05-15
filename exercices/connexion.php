<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=initiation_db;charset=utf8', 'root', 'stagiaire');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
?>