<?php
function newproject($id_session,$title, $dateline, $customer)
{
  global $bdd;

  // Insert new project
  $req = $bdd->prepare('INSERT INTO project (id_admin, title, dateline, customer, creation_date) VALUES(:id, :id_admin, :title, :dateline,:customer, NOW())');
  $req->execute(array(
    'id_admin'=>$id_session,
    'title'=>$title,
    'dateline'=>$dateline,
    'customer'=>$customer
    ));
  };
?>
