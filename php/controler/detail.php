<?php
if (!isset($_POST['details']) OR isset($_POST['customer']) OR isset($_POST['tache'])) {

  require 'php/controler/detail/customer_controler.php';

}else {
  require 'php/controler/detail/newcustomer_controler.php';
}
?>
