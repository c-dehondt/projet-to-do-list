<?php
session_start();

      require 'php/vue/header.php';

      if (!isset($_SESSION['name'])) {
        require 'php/controler/admin.php';

      }else {
        if (isset($_POST['detail'])) {
          require 'php/controler/detail.php';
        }else {
          require 'php/controler/project.php';
        }
      }

      require 'php/vue/footer.php';
?>
