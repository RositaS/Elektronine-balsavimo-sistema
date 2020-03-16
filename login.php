<?php
// examplepage.php
include 'functions.php';
$pdo = pdo_connect_mysql();
?>

<?=template_header('Log in')?>

<form method="post" action="" name="signin-form">
    <div class="center">
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="center">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Log In</button>
</form>

<?=template_footer()?>