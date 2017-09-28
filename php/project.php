<?php
require 'modele/connexion_sql.php';
require 'vue/header.php';?>

  <section class="container row">
    <?php
      if (!isset($_POST['newproject'])):
        require 'vue/projet/project_vue.php';
      else:
        require 'vue/projet/new-project_vue.php';
      endif;
    ?>
  </section>

<?php require 'vue/footer.php';?>
