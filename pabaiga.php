<?php
include 'functions.php';
date_default_timezone_set('Europe/Vilnius');
$data = date("Y-m-d H:i");
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the polls and poll answers
?>
<?=template_header('Polls')?>

<div class="content home">
	<h2><?php echo $data?></h2>
    <p>Dėkojame už jūsų balsą!</p>
    <p> Atsijungti</p>
    <a href="login.php" class="btn btn-primary">Atsijungti</a>


<?=template_footer()?>