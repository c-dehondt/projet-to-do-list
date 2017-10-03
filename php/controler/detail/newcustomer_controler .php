<?php
session_start();
require '../../../php/modele/connexion_sql.php';
require '../../../php/modele/detail/newcustomer_modele.php';

$contributors = $_POST['contributor'];
var_dump($contributors);
newcustomer($contributors);
header('location: ../../../index.php');
?>
