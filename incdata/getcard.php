<?php

$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);

$sql = "SELECT * FROM sw_users WHERE pUsername= '$username' ";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    $cardnumber = $row["pCardNumber"];
  }

if ($cardnumber == 0)
{
    $cardnumber = "شماره کارتی ثبت نشده است";
}


?>