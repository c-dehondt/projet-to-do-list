<?php
session_start();
require 'php/modele/todolist/job.php';


$id_contributor2=id_contributor($test2['id']);

$jobs = job($_POST['tache']);

?>
