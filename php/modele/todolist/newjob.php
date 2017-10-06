<?php
require_once '../../modele/connexion_sql.php';
function newcustomer($id_contributor, $jobs)
{
    $bdd=getdatabase();

  // Insert new contributor
  $req = $bdd->prepare('INSERT INTO to_do_list ($id_contributor, job) VALUES(:$id_contributor, :job)');
  $req->execute(array(
    '$id_contributor'=>$id_contributor,
    'job'=>$jobs,
    ));

  };
?>
