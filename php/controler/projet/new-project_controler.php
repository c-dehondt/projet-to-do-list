<?php
session_start();
require '../../modele/projet/new-project_modele.php';

$title = $_POST['title'];
$dateline = $_POST['dateline'];
var_dump($title);
$customer = $_POST['customer'];
var_dump($customer);
newproject($title, $dateline, $customer);
?>
