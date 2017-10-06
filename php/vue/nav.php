<nav class="nav-extended blue-grey darken-2 row">
    <div class="nav-wrapper col s4">
      <a href="index.php" class="brand-logo"><img class="responsive" src="img/logo.png" alt="logo du l'entreprise"></a>
    </div>
      <?php if ($_SESSION['name']):?>
        <div class="chip col s1 offset-s6">
          <?php echo $_SESSION['name']?>
          <a href="php/controler/admin/deconnexion.php"><i class="close material-icons">close</i></a>
        </div>
      <?php endif; ?>
    <h1 class="center-align col s12 ">Projet <br>de construction</h1>
  </nav>
