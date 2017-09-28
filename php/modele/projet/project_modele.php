<?php
function projects()
{
  global $bdd;

  $reponse = $bdd->query('SELECT * FROM project INNER JOIN admin ON admin.id = project.id_admin');

  $projects = $reponse->fetchAll();

  return $projects;
}
?>
