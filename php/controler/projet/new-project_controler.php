<?php
session_start();
require '../../../php/modele/connexion_sql.php';
require '../../../php/modele/projet/new-project_modele.php';

$id_session = $_SESSION['id'];
$title = $_POST['title'];
$dateline = $_POST['dateline'];
$customer = $_POST['customer'];

newproject($id_session,$title, $dateline, $customer);
header('location: ../../../index.php');

?>
