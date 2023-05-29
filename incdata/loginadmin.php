<?php

//Connect To DB
$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);
//Get User Entered By User
$sql = "SELECT * FROM sw_admininf WHERE $userpname= '$user' ";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  $useresh = $row["$userpname"];
}

$sql1 = "SELECT * FROM sw_admininf WHERE $userppass= '$pass' ";
$result1 = $conn->query($sql1);

while($row1 = $result1->fetch_assoc()) {
  $passesh = $row1["$userppass"];
}

//Check User Exist Or No
if ($useresh == "")
{
  $eshtebahe2 = "1";
}
//Check Password is == Entered Pass
elseif($passesh == "")
{
  $eshtebahe = "1";
}
elseif($useresh == $user && $passesh == $pass) 
{
  $_SESSION["LogIn"] = true;
  header("location: index");
}

?>