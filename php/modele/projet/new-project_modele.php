<?php
require_once '../../modele/connexion_sql.php';
function newproject($id_session,$title, $dateline, $customer)
{
  $bdd=getdatabase();

  // Insert new project
  $req = $bdd->prepare('INSERT INTO project (id_admin, title, dateline, customer, creation_date) VALUES(:id_admin, :title, :dateline,:customer, NOW())');
  $req->execute(array(
    'title'=>$title,
    'id_admin'=>$id_session,
    'dateline'=>$dateline,
    'customer'=>$customer
    ));
  };
?>
