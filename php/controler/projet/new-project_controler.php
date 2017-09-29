<?php
session_start();
require 'modele/connexion_sql.php';
require 'modele/projet/new-project_modele.php';

$title = $_POST['title'];
$dateline = $_POST['dateline'];
$customer = $_POST['customer'];
$id_session = $_SESSION['id'];

newproject($title, $dateline, $customer, $id_session);
require 'project.php';
?>
