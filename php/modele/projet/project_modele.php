<?php
function projects($admin)
{
  global $bdd;

  $reponse = $bdd->prepare('SELECT * FROM project WHERE id_admin = :admin');
  $reponse->execute(array(
   'admin' => $admin
    ));

      $projects=$reponse->fetchAll();
      return $projects;

}
?>
