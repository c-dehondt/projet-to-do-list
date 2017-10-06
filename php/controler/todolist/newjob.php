<?php
require '../../modele/todolist/newjob_modele.php';


$id_contributor =$_POST['details'];
$jobs = $_POST['job'];


newcustomer($id_contributor, $jobs);
header('location: ../../../index.php');
?>
