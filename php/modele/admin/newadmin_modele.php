<?php
require_once '../../modele/connexion_sql.php';

function newadmin($name, $first_name, $age,$email ,$pass_hache)
{
  $bdd=getdatabase();
  // Insert new admin
  $req = $bdd->prepare('INSERT INTO `admin`(name, first_name, age ,email, password) VALUES(:name, :first_name, :age ,:email, :password)');
  $req->execute(array(
    'name'=>$name,
    'first_name'=>$first_name,
    'age'=>$age,
    'email'=>$email ,
    'password'=>$pass_hache));
};
?>
