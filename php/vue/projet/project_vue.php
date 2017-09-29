<?php if ($projects): ?>

  <?php  foreach($projects as $project):?>

    <div class="card">
      <div class="content row">
      <p class="col s2"><?php echo $project['title'] ?></p>
      <p class="col s2"><?php echo $project['dateline'] ?></p>
      <p class="col s2"> <?php echo $project['customer'] ?></p>
      <p class="col s2"><?php echo $project['status'] ?></p>
      <div class="col s2">
        <a class=" btn-floating waves-effect waves-light red"><i class="material-icons">add</i></a>
        <a class=" btn-floating waves-effect waves-light red"><i class="material-icons">add</i></a>
      </div>
  </div>
  </div>

  <?php endforeach; ?>

<?php else: ?>
  <h2>Aucun projet</h2>
<?php endif; ?>


<div class="fixed-action-btn click-to-toggle">
  <a class="btn-floating btn-large red">
    <i class="material-icons">mode_edit</i>
  </a>
  <ul>
    <li>
      <form action="../php/project.php"  method="post">
        <input type="hidden" name="newproject">
        <button class="btn-floating red" type="submit"><i class="material-icons">create</i></button>
      </form>
    </li>
  </ul>
</div>
