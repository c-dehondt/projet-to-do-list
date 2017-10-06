<?php
session_start();
require '../../modele/admin/admin_modele.php';

$name = $_POST["nameAdmin"];
$password = sha1($_POST['passwordAdmin']);


$admin=admins($name, $password);

foreach ($admin as $cle => $admins) {
  $admin[$cle]["id"]=$admins['id'];
  $admin[$cle]["name"]=$admins['name'];
}

if ($admin) {
  header('location: ../../../index.php');
  $_SESSION['id'] = $admins["id"];
  $_SESSION['name'] = $admins['name'];
}

  ?>
