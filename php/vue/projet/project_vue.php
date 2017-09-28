<?php  foreach ($projects as $project):?>

<div class="card row">
  <p class="col s2"><?php echo $project['title'] ?></p>
  <p class="col s2"><?php echo $project['dateline'] ?></p>
  <p class="col s2"> <?php echo $project['customer'] ?></p>
  <p class="col s2"><?php echo $project['status'] ?></p>

  <a class="col s1 btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
  <a class="col s1 btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>

</div>

<?php endforeach; ?>



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
