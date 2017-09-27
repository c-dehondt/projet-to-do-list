<?php
session_start();
require '../../modale/connexion_sql.php';
require '../../modale/admin/admin.php';

$name = $_POST["nameAdmin"];
$password = sha1($_POST['passwordAdmin']);


$admin=admins($name, $password);

foreach ($admin as $cle => $admins) {
  $admin[$cle]["id"]=$admins['id'];
  $admin[$cle]["name"]=$admins['name'];
}

if (!$admins){
  $_SESSION["erreur_mot_de_passe"];

}else {
  $_SESSION['id'] = $admins["id"];
  $_SESSION['name'] = $name;
  // var_dump($_SESSION['pseudo']);
  // var_dump($_SESSION['id']);
  header('location: ../../../index.php');
}
  ?>
