<?php
function admins($name, $password)
{
  global $bdd;

$reponse = $bdd->prepare('SELECT * FROM admin WHERE name = :name AND password = :password');
$reponse ->execute(array(
  'name'=>$name,
  'password'=>$password));

$admin = $reponse->fetchAll();

return $admin;
}
?>
