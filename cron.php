<?php


include 'incdata/config.php';

$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);


$insert_data = $conn -> query("DELETE FROM sw_withdraws WHERE pStatus = 0");
$insert_data1 = $conn -> query("DELETE FROM sw_tarakonesh");

?>