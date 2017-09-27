<section class="row">

<div class="card col s12 m6">
  <h2>New User</h2>

<div class="card-content row">
  <form action="php/controler/admin/newadmin_controler.php" method="post" >

    <!-- name newuser -->
      <div class="input-field col s6">
        <input id="name" type="text" name="name" class="validate">
        <label for="name">name</label>
      </div>

    <!-- first_name newuser -->
      <div class="input-field col s6">
        <input id="first_name" type="text" name="first_name" class="validate">
        <label for="first_name">first name</label>
      </div>

      <!-- age newuser -->
      <div class="input-field col s6">
        <input id="age" type="number" name="age" class="validate">
        <label for="age">age</label>
      </div>

    <!-- Email newuser -->
      <div class="input-field col s6">
        <input id="email" type="email" name="email" class="validate">
        <label for="email">Email</label>
      </div>

    <!-- password new user -->
    <div class="input-field col s6">
      <input id="password" type="password" name="password" class="validate">
      <label for="password">password</label>
    </div>


    <div class="card-action">
      <input class="waves-effect waves-light btn" type="submit" value="valider">
    </div>
  </form>
  </div>
</div>
</section>
