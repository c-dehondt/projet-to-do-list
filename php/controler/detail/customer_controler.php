<?php
session_start();
require_once 'php/modele/connexion_sql.php';
require 'php/modele/detail/customer_modele.php';


$project = $_SESSION['id'];
$contributor = customer($project);
if ($contributors) {

foreach ($contributors as $cle => $contributor) {
  $contributors[$cle]['contributor'] = htmlspecialchars($contributor['contributor']);
    }
  }
require 'php/vue/detail/detail_vue.php'
?>
