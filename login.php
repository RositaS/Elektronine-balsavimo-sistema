<?php
// examplepage.php
include 'functions.php';
$pdo = pdo_connect_mysql();
?>

<?=template_header('Log in')?>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Prisijungimo vardas</label>
    <input type="username" class="form-control" id="exampleInputEmail1" aria-describedby="usernameHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Slaptažodis</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Prisijungti</button>
  <button type="reset" class="btn btn-warning">Išvalyti</button>
  <button type="submit" class="btn btn-danger">Prisijungti su LSP</button>
</form>

<?=template_footer()?>