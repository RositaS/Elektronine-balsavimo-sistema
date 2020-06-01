<?php

session_start();

require_once "config.php";

$options = $_POST['options1'];
$options1 = $_POST['options3'];
$candidate = $_POST['candidate1'];
$rating = $_POST['rating'];

$council1 = NULL;
if(isset($_POST['council1'])) {
    $council1 = $_POST['council1'];
}
$council2 = NULL;
if(isset($_POST['council2'])) {
    $council2 = $_POST['council2'];
}
$council3 = NULL;
if(isset($_POST['council3'])) {
    $council3 = $_POST['council3'];
}
$council4 = NULL;
if(isset($_POST['council4'])) {
    $council4 = $_POST['council4'];
}

$delegate1 = NULL;
if(isset($_POST['delegate1'])) {
    $delegate1 = $_POST['delegate1'];
}
$delegate2 = NULL;
if(isset($_POST['delegate2'])) {
    $delegate2 = $_POST['delegate2'];
}
$delegate3 = NULL;
if(isset($_POST['delegate3'])) {
    $delegate3 = $_POST['delegate3'];
}
$delegate4 = NULL;
if(isset($_POST['delegate4'])) {
    $delegate4 = $_POST['delegate4'];
}
$delegate5 = NULL;
if(isset($_POST['delegate5'])) {
    $delegate5 = $_POST['delegate5'];
}
$delegate6 = NULL;
if(isset($_POST['delegate6'])) {
    $delegate6 = $_POST['delegate6'];
}
$delegate7 = NULL;
if(isset($_POST['delegate7'])) {
    $delegate7 = $_POST['delegate7'];
}
$delegate8 = NULL;
if(isset($_POST['delegate8'])) {
    $delegate8 = $_POST['delegate8'];
}
$delegate9 = NULL;
if(isset($_POST['delegate9'])) {
    $delegate9 = $_POST['delegate9'];
}
$delegate10 = NULL;
if(isset($_POST['delegate10'])) {
    $delegate10 = $_POST['delegate10'];
}

$user = $_SESSION["username"];

$optionsSQL = "INSERT INTO vivat_tvirtinimas (user, options, candidate, options1, rating) 
               VALUES ('$user', '$options', '$candidate', '$options1', $rating);";

$councilSQL1 = NULL;
if($council1 != NULL) {
    $councilSQL1 = "INSERT INTO vivat_council (user, council) VALUES ('$user', '$council1');";
    mysqli_query($link, $councilSQL1);
}
$councilSQL2 = NULL;
if($council2 != NULL) {
    $councilSQL2 = "INSERT INTO vivat_council (user, council) VALUES ('$user', '$council2');";
    mysqli_query($link, $councilSQL2);
}
$councilSQL3 = NULL;
if($council3 != NULL) {
    $councilSQL3 = "INSERT INTO vivat_council (user, council) VALUES ('$user', '$council3');";
    mysqli_query($link, $councilSQL3);
}
$councilSQL4 = NULL;
if($council4 != NULL) {
    $councilSQL4 = "INSERT INTO vivat_council (user, council) VALUES ('$user', '$council4');";
    mysqli_query($link, $councilSQL4);
}

$delegateSQL1 = NULL;
if($delegate1 != NULL) {
    $delegateSQL1 = "INSERT INTO vivat_delegate (user, delegate) VALUES ('$user', '$delegate1');";
    mysqli_query($link, $delegateSQL1);
}
$delegateSQL2 = NULL;
if($delegate2 != NULL) {
    $delegateSQL2 = "INSERT INTO vivat_delegate (user, delegate) VALUES ('$user', '$delegate2');";
    mysqli_query($link, $delegateSQL2);
}
$delegateSQL3 = NULL;
if($delegate3 != NULL) {
    $delegateSQL3 = "INSERT INTO vivat_delegate (user, delegate) VALUES ('$user', '$delegate3');";
    mysqli_query($link, $delegateSQL3);
}
$delegateSQL4 = NULL;
if($delegate4 != NULL) {
    $delegateSQL4 = "INSERT INTO vivat_delegate (user, delegate) VALUES ('$user', '$delegate4');";
    mysqli_query($link, $delegateSQL4);
}
$delegateSQL5 = NULL;
if($delegate5 != NULL) {
    $delegateSQL5 = "INSERT INTO vivat_delegate (user, delegate) VALUES ('$user', '$delegate5');";
    mysqli_query($link, $delegateSQL5);
}
$delegateSQL6 = NULL;
if($delegate6 != NULL) {
    $delegateSQL6 = "INSERT INTO vivat_delegate (user, delegate) VALUES ('$user', '$delegate6');";
    mysqli_query($link, $delegateSQL6);
}
$delegateSQL7 = NULL;
if($delegate7 != NULL) {
    $delegateSQL7 = "INSERT INTO vivat_delegate (user, delegate) VALUES ('$user', '$delegate7');";
    mysqli_query($link, $delegateSQL7);
}
$delegateSQL8 = NULL;
if($delegate8 != NULL) {
    $delegateSQL8 = "INSERT INTO vivat_delegate (user, delegate) VALUES ('$user', '$delegate8');";
    mysqli_query($link, $delegateSQL8);
}
$delegateSQL9 = NULL;
if($delegate9 != NULL) {
    $delegateSQL9 = "INSERT INTO vivat_delegate (user, delegate) VALUES ('$user', '$delegate9');";
    mysqli_query($link, $delegateSQL9);
}
$delegateSQL10 = NULL;
if($delegate10 != NULL) {
    $delegateSQL10 = "INSERT INTO vivat_delegate (user, delegate) VALUES ('$user', '$delegate10');";
    mysqli_query($link, $delegateSQL10);
}

mysqli_query($link, $optionsSQL);

header("location: pabaiga.php");

?>