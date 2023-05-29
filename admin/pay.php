<?php

$id = $_POST["id"];

include '../incdata/config.php';

$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);

$insert_data = $conn -> query("UPDATE sw_withdraws SET pStatus = 0 WHERE pID = '$id'");

header("Location: index");


?>