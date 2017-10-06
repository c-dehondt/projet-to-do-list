<?php
session_start();

      require 'php/vue/header.php';
      require 'php/vue/nav.php';



      if (!isset($_SESSION['name'])) {
        require 'php/controler/admin.php';

      }else {
        if (isset($_POST['detail']) OR isset($_POST['customer']) OR isset($_POST['tache']) Or isset($_POST['newjob'])) {
          require 'php/controler/detail.php';
        }else {
          require 'php/controler/project.php';
        }
      }

      require 'php/vue/footer.php';
?>
