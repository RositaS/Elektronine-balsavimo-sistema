<?php
date_default_timezone_set('Europe/Vilnius');
$data = date("Y-m-d H:i");

// Initialize the session
session_start();

if($_SESSION["username"] !== "admin") {
    header("location: error.php");
}

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin puslapis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <nav class="navtop">
        <div>
            <h1>Elektroninė balsavimo sistema</h1>
        </div>
    </nav>
    <div class="content home">
        <h2><?php echo $data ?></h2>
    </div>
    <div class="page-header">
        <h1>Esate prisijungę kaip <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>!</h1>
    </div>
    <p>
        <a href="statistika.php" class="btn btn-primary">Statistikos</a>
        <a href="logout.php" class="btn btn-danger">Atsijungti</a>
    </p>
</body>
</html>