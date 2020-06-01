<?php
date_default_timezone_set('Europe/Vilnius');
$data = date("Y-m-d H:i");

$redir = "";
if (isset($_POST['balsuoti'])) {
    $pasirinkimas = $_POST['atstovybe'];
    if (empty($pasirinkimas)) {
        $error = "error";
    }

    switch ($pasirinkimas) {
        case "1":
            $redir = "infosa_biuletenis.php";
            break;
        case "2":
            $redir = "vivat_biuletenis.php";
    }
}
header("location: $redir");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navtop">
        <div>
            <h1>Elektroninė balsavimo sistema</h1>
        </div>
    </nav>
    <div class="content home">
        <h2><?php echo $data ?></h2>
        <p>Sveiki prisijungę prie elektroninės balsavimo sistemos!</p>
        <p>Balsavimas netrukus prasidės</p>
        <p>Pasirinkite savo atstovybę</p>
        <form method="POST">
            <select id="atstovybe" name="atstovybe" class="custom-select custom-select-sm">
                <option value="">Pasirinkite</option>
                <option value="1">InfoSA</option>
                <option value="2">Vivat</option>
            </select>
            <input type="submit" name="balsuoti" value="Eiti į balsavimą" class="btn btn-primary" />
        </form>
</body>

</html>