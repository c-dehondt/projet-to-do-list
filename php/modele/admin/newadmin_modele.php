<?php
function newadmin($name, $first_name, $age,$email ,$pass_hache)
{
  global $bdd;
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
