<?php

include '../../incdata/config.php';

$username = basename(__DIR__);

$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);
$conn->set_charset("utf8");
$sql = "SELECT * FROM sw_users WHERE pUsername= '$username' ";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    $realname = $row["pRealName"];
  }

?>