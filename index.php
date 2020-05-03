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
    <p>Sveiki prisijungę prie elektroninės balsavimo sistemos!</p>
    <p>Balsavimas netrukus prasidės</p>
    <p>Pasirinkite savo atstovybę</p>
    <select class="custom-select custom-select-sm">
    <option value="1">InfoSA</option>
    <option value="2">Vivat</option>
    <option value="3">Belekas</option>
    <option value="4">Kosmosas</option>
    <option value="5">:)</option>
    </select>
    <button type="submit" class="btn btn-primary">Eiti į balsavimą</button>


<?=template_footer()?>