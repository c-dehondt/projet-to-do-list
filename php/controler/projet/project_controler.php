<?php
session_start();
require_once 'php/modele/connexion_sql.php';
require 'php/modele/projet/project_modele.php';
$admin = $_SESSION['id'];
$projects = projects($admin);
if ($projects) {

foreach ($projects as $cle => $project) {
  $projects[$cle]['title'] = htmlspecialchars($project['title']);
  $projects[$cle]['dateline'] =htmlspecialchars($project['dateline']);
  $projects[$cle]['customer'] =htmlspecialchars($project['customer']);
  $projects[$cle]['status'] = htmlspecialchars($project['status']);
    }

  }
  $_SESSION['customer']=$project['customer'];
  $_SESSION['title']= $project['title'];
require 'php/vue/projet/project_vue.php'
?>
