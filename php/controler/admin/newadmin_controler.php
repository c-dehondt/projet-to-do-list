<?php
require 'php/modele/admin/newadmin_modele.php';

$name = $_POST['name'];
$first_name = $_POST['first_name'];
$age = $_POST['age'];
$email= $_POST['email'];
$pass_hache = sha1($_POST['password']);
newadmin($name, $first_name, $age, $email ,$pass_hache);
header('Location: php/admin.php');
?>
