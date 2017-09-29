<?php
session_start();

require 'modele/connexion_sql.php';
require 'vue/header.php';?>

  <section class="container row">
    <h2>Bonjour <?php echo $_SESSION['name']?></h2>
    <?php
      if (!isset($_POST['newproject'])):
        require 'controler/projet/project_controler.php';
        require 'vue/projet/project_vue.php';
      else:
        require 'controler/projet/new-project_controler.php';
        require 'vue/projet/new-project_vue.php';
      endif;
    ?>
  </section>

<?php require 'vue/footer.php';?>
