<section class="row center">

<div class="center-align truncate col s12 m6">
  <div class="card">
    <div class="card-content">
      <span class="card-title">Admin</span>
      <div class="row">
       <form class="col s12" action="php/controler/admin/admin_controler.php" method="post">

         <div class="row">
           <div class="input-field col s6">
              <input  id="name" name="nameAdmin" type="text" class="validate">
              <label for="name">Pseudo</label>
            </div>
          <div>

          <div class="row">
             <div class="input-field col s12">
               <input id="code" name="passwordAdmin" type="text" class="validate">
               <label for="code">Mot de passe</label>
             </div>
           </div>
         </div>

       <div class="card-action">
         <input class="waves-effect waves-light btn" type="submit" value="valider">
       </div>
     </form>
     </div>
     </div>
    </div>
  </div>
</div>
<div class="fixed-action-btn click-to-toggle">
  <a class="btn-floating btn-large red">
    <i class="material-icons">mode_edit</i>
  </a>
  <ul>
    <li>
      <form action="php/admin.php"  method="post">
        <input type="hidden" name="newAdmin">
        <button class="btn-floating red" type="submit"><i class="material-icons">person</i></button>
      </form>
    </li>
  </ul>
</div>
</section>
