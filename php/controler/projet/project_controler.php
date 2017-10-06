<?php
session_start();
require 'php/modele/projet/project_modele.php';
$admin = $_SESSION['id'];

$projects = projects($admin);

require 'php/vue/projet/project_vue.php'
?>
