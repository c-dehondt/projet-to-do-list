<?php
require_once 'php/modele/connexion_sql.php';

function projects($admin)
{
  $bdd=getdatabase();

  $reponse = $bdd->prepare('SELECT * FROM project WHERE id_admin = :admin');
  $reponse->execute(array(
   'admin' => $admin
    ));

      $projects=$reponse->fetchall();
      return $projects;

}
?>
