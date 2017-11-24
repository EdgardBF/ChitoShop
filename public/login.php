<?php
  require("lib/page.php");
  Page::header("Login");
  Page::navbar("Login");
?>
  <br>
  <div class="container row">
      <form class="col s12 m6 offset-m3 cuadro">
        <div class="row">
          <h4 class="color-negro center-align">Inicio de Sesión</h4>
          <div class="input-field col s12 m10 offset-m1">
            <i class="material-icons prefix black-text">account_circle</i>
            <input id="usuario" type="text" autocomplete="off" class="validate black-text">
            <label for="usuario">Usuario</label>
          </div>
          <div class="input-field col s12 m10 offset-m1">
            <i class="material-icons prefix black-text">security</i>
            <input id="password" type="text" autocomplete="off" class="validate black-text">
            <label for="password">Contraseña</label>
          </div>
        </div>
        <div class="row">
          <button class="col s12 m6 offset-m3 btn waves-effect indigo lighten-1" type="submit" name="action">Ingresar
            <i class="material-icons left">launch</i>
            <i class="material-icons right">launch</i>
          </button>
        </div>
      </form>
  </div>
<?php
  Page::footer("Login");
?>