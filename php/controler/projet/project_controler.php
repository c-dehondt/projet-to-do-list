<?php
require 'php/modele/connexion_sql.php';
require 'php/modele/projet/project_modele.php';


$project=projects();
foreach ($projects as $cle => $project) {
  $projects[$cle]['title'] = htmlspecialchars($project['title']);
  $projects[$cle]['dateline'] =nl2br(htmlspecialchars($project['dateline']));
  $projects[$cle]['customer'] =nl2br(htmlspecialchars($project['customer']));
  $projects[$cle]['status'] = nl2br(htmlspecialchars($project['status']));
}
require 'php/vue/projet/project_vue.php';
?>
