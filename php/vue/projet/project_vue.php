<?php if ($projects): ?>
  <div class="container col s12">

  <table class="bordered responsive-table centered">
          <thead class="blue-grey darken-3">
            <tr>
                <th>titre du projet</th>
                <th>dateline</th>
                <th>Client</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
          </thead>

  <?php  foreach($projects as $project):?>
    <tbody class="">
         <tr class=" blue-grey darken-1">
           <td><?php echo htmlspecialchars($project['title']) ?></td>
           <td><?php echo $project['dateline'] ?></td>
           <td><?php echo $project['customer']?></td>
           <td><?php echo $project['status'] ?></td>
           <td>
             <!-- detail project -->
             <form class="" action="index.php" method="post">
               <input type="hidden" name="detail" value="<?php echo $project['id']?>">
               <button class=" waves-effect waves-light btn #f4511e deep-orange darken-1"><i class="material-icons">add</i></button>
             </form>
           </td>
           <td>
             <!-- delete project -->
             <form class="" action="index.html" method="post">
               <input type="hidden" name="delete">
               <button class=" waves-effect waves-light btn #b71c1c red darken-4"><i class="material-icons">delete</i></button>
             </form>
            </td>
         </tr>
       <?php endforeach; ?>

<?php else: ?>
  <tr>
    <td>Aucun projet</td>
  </tr>
<?php endif; ?>

    </tbody>
  </table>

<div class="fixed-action-btn click-to-toggle">
  <a class="btn-floating btn-large red">
    <i class="material-icons">mode_edit</i>
  </a>
  <ul>
    <li>
      <form action="index.php"  method="post">
        <input type="hidden" name="newproject">
        <button class="btn-floating red" type="submit"><i class="material-icons">create</i></button>
      </form>
    </li>
  </ul>
</div>


</div>
