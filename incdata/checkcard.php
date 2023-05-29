<?php

$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);

$sql = "SELECT * FROM sw_users WHERE pUsername= '$username' ";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    $cardnumber = $row["pCardNumber"];
    $balance = $row["pCash"];
  }

  if ($cardnumber == 0)
  {
    header("Location: bank");
  }

  if($balance < 50000)
  {
    $check = "حداقل موجودی قابل برداشت 50 هزارتومان می باشد ، موجودی شما کافی نیست";
    $dis = "disabled";
  }



?>