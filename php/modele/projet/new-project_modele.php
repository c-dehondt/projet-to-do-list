<?php
function newproject($title, $dateline, $customer)
{
  global $bdd;
  // Insert new project
  $req = $bdd->prepare('INSERT INTO `project`(title, dateline, customer, creation_data) VALUES(:title, :dateline,:customer, now())');
  $req->execute(array(
    'title'=>$title,
    'dateline'=>$dateline,
    'customer'=>$customer
    ));


    // $id_project= $bdd-> lastInsertId();
    // var_dump($id_project);
    //
    // $sql=$bdd->prepare ("INSERT INTO project (id_admin) VALUES (?)");
    // $sql->execute([$id_project ['id_admin']]);
  };
?>
