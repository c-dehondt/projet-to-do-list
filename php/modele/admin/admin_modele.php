<?php

function admins($name, $password)
{
  global $bdd;

$reponse = $bdd->prepare('SELECT * FROM `admin` WHERE name = :name and password = :password');
$reponse ->execute(array(
  'name'=>$name,
  'password'=>$password));

$admin = $reponse->fetchAll();
//var_dump($donnees['password']);
//var_dump(sha1($donnees['password']));
//var_dump($donnees['pseudo']);

return $admin;
}
?>
