<?php
function getdatabase()
{

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=todoliste;charset=utf8', 'root', 'root');

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
return $bdd;
}
