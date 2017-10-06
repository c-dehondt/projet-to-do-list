<?php
require_once '../../modele/connexion_sql.php';
function newcustomer($id_project, $contributors, $dateline)
{
    $bdd=getdatabase();

  // Insert new contributor
  $req = $bdd->prepare('INSERT INTO contributor (id_project, contributor_name, dateline) VALUES(:id_project, :contributor_name, :dateline)');
  $req->execute(array(
    'id_project'=>$id_project,
    'contributor_name'=>$contributors,
    'dateline'=>$dateline
    ));
    
  };
?>
