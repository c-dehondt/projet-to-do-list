<?php
require_once 'php/modele/connexion_sql.php';

function id_contributor($contributor_id){
  $bdd=getdatabase();

  $req= $bdd->prepare('SELECT * FROM contributor WHERE id = :id_contributor');
  $req->execute(array(
    'id_contributor'=>$contributor_id
  ));
  $id_contributor2=$req->fetch();
  return $id_contributor2;
}



function job($contributor_id)
{
    $bdd=getdatabase();

  //  job
  $req = $bdd->prepare('SELECT * FROM to_do_list WHERE id_contributor = :contributor_id');
  $req->execute(array(
    'contributor_id'=>$contributor_id
    ));
    $job=$req->fetchAll();
    return $job;
  }
?>
