<main class="container">
<?php
if (!isset($_POST['newAdmin'])):
  require 'php/vue/admin/admin_vue.php';
else:
  require 'php/vue/admin/newadmin_vue.php';

 endif ?>
</main>
