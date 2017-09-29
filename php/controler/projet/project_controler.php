<?php
require 'modele/connexion_sql.php';
require 'modele/projet/project_modele.php';

$projects=projects();

foreach ($projects as $cle => $project) {
  $projects[$cle]['title'] = htmlspecialchars($project['title']);
  $projects[$cle]['dateline'] =nl2br(htmlspecialchars($project['dateline']));
  $projects[$cle]['customer'] =nl2br(htmlspecialchars($project['customer']));
  $projects[$cle]['status'] = nl2br(htmlspecialchars($project['status']));
}
require 'vue/projet/project_vue.php'
?>
