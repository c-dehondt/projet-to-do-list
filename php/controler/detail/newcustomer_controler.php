<?php
require '../../modele/detail/newcustomer_modele.php';


$id_project =$_POST['details'];
$contributors = $_POST['contributor'];
$dateline= $_POST['dateline'];


newcustomer($id_project, $contributors, $dateline);
header('location: ../../../index.php');
?>
