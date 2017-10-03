<?php
function customer($project)
{
  global $bdd;

  //  customer
  $req = $bdd->prepare('SELECT * FROM contributor WHERE id_project = :project');
  $req->execute(array(
    'project'=>$project
    ));

    $newcustomer=$req->fetchAll();
    return $newcustomer;
  }
?>
