<?php
session_start();
require 'php/modele/detail/customer_modele.php';


$test2=test($_POST['detail']);
$contributors = customer($_POST['detail']);

require_once'php/controler/todolist/job.php';

require 'php/vue/detail/detail_vue.php'
?>
