<?php
// Initialize the session
require_once "config.php";
session_start();
$vardas = $_SESSION["username"];

 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 if($vardas!="admin")
{
    // sql to delete a record
    $sql = "DELETE FROM prisijungimas WHERE vardas='$vardas'";
    mysqli_query($link,$sql);
}
// Redirect to login page
header("location: login.php");
exit;
?>