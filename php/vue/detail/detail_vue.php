<?php session_start(); ?>
<section class="row">
  <h2>projet de <?php echo $_SESSION['name'] ?></h2>

   <article class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><?php
              echo $_SESSION['title']?></span>
            <div class="card-action">

              <?php if ($$contributors): ?>
                <?php foreach ($contributors as $contributor):?>
                  <button class="waves-effect waves-light btn"><?php echo $contributors['contributor'] ?></button>
                <?php endforeach; ?>

                <?php else: ?>
                <?php   echo "Aucun contributeur"; ?>
            <?php endif; ?>
            </div>
            <form class="" action="index.php" method="post">
              <input type="hidden" name="customer">
              <button class="btn-floating btn waves-effect waves-light red"><i class="material-icons">add</i></button>
            </form>
            </div>

            <?php if (!isset($_POST['customer'])): ?>
              <?php require 'php/vue/detail/newcustomer_vue.php'; ?>
            <?php endif; ?>

          </div>
        </div>
   </article>
</section>
