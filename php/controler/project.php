<?php
session_start();?>

  <section class="container row">

    <h2>Bonjour <?php echo $_SESSION['name']?></h2>


    <?php
    var_dump($_SESSION['id']);
      if (!isset($_POST['newproject'])):
        require 'php/controler/projet/project_controler.php';
      else:;
        require 'php/vue/projet/new-project_vue.php';
      endif;
    ?>
  </section>