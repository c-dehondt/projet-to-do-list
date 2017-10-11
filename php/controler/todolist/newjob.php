<?php
require '../../modele/todolist/newjob.php';


$id_contributor =$_POST['tache2'];
$jobs = $_POST['newjob'];

newjob($id_contributor, $jobs);
header( 'location:../../../index.php');
?>
