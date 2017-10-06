
  <section class="container row">
    <?php
      if (!isset($_POST['newproject'])):
        require 'php/controler/projet/project_controler.php';
      else:;
        require 'php/vue/projet/new-project_vue.php';
      endif;
    ?>
  </section>
