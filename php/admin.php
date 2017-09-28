<main class="container">

  <?php if (!isset($_POST['newAdmin'])): ?>

    <?php require 'php/vue/admin/admin_vue.php' ?>

  <?php else: ?>

    <?php require 'php/vue/admin/newadmin_vue.php'; ?>

  <?php endif; ?>

</main>
