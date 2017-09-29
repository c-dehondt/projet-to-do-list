<?php
function newproject($title, $dateline, $customer,$id_session)
{
  global $bdd;

  // Insert new project
  $req = $bdd->prepare('INSERT INTO project (id_admin, title, dateline, customer, creation_data)
                        VALUES(:id_admin, :title, :dateline,:customer, NOW())');
  $req->execute(array(
    'id_admin'=>$id_session,
    'title'=>$title,
    'dateline'=>$dateline,
    'customer'=>$customer
    ));


    var_dump($req);
  };
?>
