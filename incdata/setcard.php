<?php

session_start();
if($_SESSION["loggedIn"] != true){
    header("Location: ./");
    exit;
  }

$cardnum = $_POST["cardnumber"];
  $username = $_SESSION["useresh"];
  include 'config.php';

$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);

$insert_data = $conn -> query("UPDATE sw_users SET pCardNumber = '$cardnum' WHERE pUsername = '$username'");

header("Location: ../bank");

?>