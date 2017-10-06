<?php session_start(); ?>
<section class="container row center-align">
  <h2>projet</h2>

   <article class="row col s3 card-content blue-grey darken-1 white-text">
        <div class="col s10">
              <h4 class="card-title">
                <?php echo $test2['title']?>
              </h4>
          </div>

          <!-- list of contributors for the project -->
          <div class="col s12">
            <?php
              if ($contributors):?>
                <?php foreach ($contributors as $contributor):?>
                  <form class="" action="index.php" method="post">
                    <input type="hidden" name="detail" value="<?php echo $test2['id'] ?>">
                    <input type="hidden" name="tache" value="<?php echo htmlspecialchars($contributor['id'])?>">
                    <button class="waves-effect waves-light btn"><?php echo htmlspecialchars( $contributor['contributor_name']) ?></button>
                  </form>
                  <p><?php echo htmlspecialchars($contributor['dateline'])?></p>
                <?php endforeach; ?>

                <?php else: ?>
                <?php   echo "Aucun contributeur"; ?>
            <?php endif; ?>

            <form class="right-align" action="index.php" method="post">
              <input type="hidden" value="<?php echo $test2['id'] ?>" name="customer">
              <button class="btn-floating btn waves-effect waves-light red"><i class="material-icons">add</i></button>
            </form>
          </div>
          </div>

          <!-- add the new contributor project -->
          <?php  if (isset($_POST['customer'])):?>

            <h5>Nouvel intervenant(s) projet</h5>
            <form class="" action="php/controler/detail/newcustomer_controler.php" method="post">
              <div class="input-field col s12">
                <input name="contributor" id="contributor" type="text" class="validate">
                <label class="active" for="contributor">New contributor</label>
              </div>
              <div class="input-field col s12">
                <input id="dateline" type="text" name="dateline" class="datepicker">
                <label for="dateline">Dateline</label>
              </div>
              <input type="hidden" name="details"  value="<?php echo $_POST['customer']?>">
              <input class="waves-effect waves-light btn" type="submit" value="valider">
            </form>
        <?php endif; ?>
   </article>
   <!-- ************************************************************************************* -->
   <!-- to do list for the contributor -->
   <!-- ********************************************************************* -->

   <article class="row col s8 card-content blue-grey darken-1 white-text">
        <div class="col s12">
              <h4 class="card-title"><?php echo $id_contributor2['contributor'] ?></h4>
          </div>

          <?php if ($jobs):?>
          <div class="col s12">
                <?php foreach ($jobs as $job):?>

                  <p><?php echo htmlspecialchars($job['job'])?></p>
                <?php endforeach; ?>

                <?php else: ?>
                <?php   echo "Aucune nouvelle tache"; ?>
            <?php endif; ?>

            <form class="right-align" action="index.php" method="post">
              <input type="hidden" value="" name="newjob">
              <button class="btn-floating btn waves-effect waves-light red"><i class="material-icons">add</i></button>
            </form>
          </div>


          <!-- add the new todolist project -->
          <?php  if (isset($_POST['newjob'])):?>
              <h5>To-do-list</h5>
                <form class="" action="php/controler/todolist/newjob.php" method="post">
                  <div class="input-field col s12">
                    <input name="newjob" id="newjob" type="text" class="validate">
                    <label class="active" for="newjob">nouvelle tache</label>
                  </div>

                  <input type="hidden" name="newjob"  value="">
                  <input class="waves-effect waves-light btn" type="submit" value="valider">
                </form>
          <?php endif;?>
        </article>
      </section>
