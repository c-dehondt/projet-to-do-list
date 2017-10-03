<?php
function newcustomer($contributors)
{
  global $bdd;

  // Insert new contributor
  $req = $bdd->prepare('INSERT INTO contributor (contributor) VALUES(:contributor)');
  $req->execute(array(
    'contributor'=>$contributors
    ));
  };
?>
