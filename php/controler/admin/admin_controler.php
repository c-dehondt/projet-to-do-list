<?php
session_start();
require '../../../php/modele/connexion_sql.php';
require '../../../php/modele/admin/admin_modele.php';

$name = $_POST["nameAdmin"];
$password = sha1($_POST['passwordAdmin']);


$admin=admins($name, $password);

foreach ($admin as $cle => $admins) {
  $admin[$cle]["id"]=$admins['id'];
  $admin[$cle]["name"]=$admins['name'];
}

if ($admins){
  $_SESSION['id'] = $admins["id"];
  $_SESSION['name'] = $name;
  // var_dump($_SESSION['pseudo']);
  // var_dump($_SESSION['id']);
  header('location: ../../../php/project.php');
}
require 'php/admin.php';
  ?>
