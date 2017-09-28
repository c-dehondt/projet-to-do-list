
<div class="card col s12 m6">
  <h2>New Project</h2>

<div class="card-content row">
  <form action="controler/projet/new-project_controler.php" method="post" >
      <div class="row">
    <!-- title the new project -->
      <div class="input-field col s6">
        <input id="title" type="text" name="title" class="validate">
        <label for="title">Title</label>
      </div>

      <!-- dateline the new project -->
        <div class="input-field col s6">
          <input id="dateline" type="text" name="dateline" class="datepicker">
          <label for="dateline">Dateline</label>
        </div>

      <!-- customer the new project -->
        <div class="input-field col s6">
          <input id="customer" type="text" name="customer" class="validate">
          <label for="customer">customer</label>
        </div>
      </div>

        <div class="card-action">
          <input class="waves-effect waves-light btn" type="submit" value="valider">
        </div>
      </form>
    </div>
  </div>
