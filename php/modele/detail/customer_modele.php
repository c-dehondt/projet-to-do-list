<?php
require_once 'php/modele/connexion_sql.php';

function test($project_id){
  $bdd=getdatabase();

  $req= $bdd->prepare('SELECT * FROM project WHERE id = :id_project');
  $req->execute(array(
    'id_project'=>$project_id
  ));
  $test2=$req->fetch();
  return $test2;
}

function customer($project_id)
{
    $bdd=getdatabase();

  //  customer
  $req = $bdd->prepare('SELECT id, contributor_name, dateline FROM contributor WHERE id_project = :project_id');
  $req->execute(array(
    'project_id'=>$project_id
    ));
    $customer=$req->fetchAll();
    return $customer;
  }
?>
