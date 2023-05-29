<?php

//Connect To DB
$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);
//Get User Entered By User
$sql = "SELECT * FROM $usertbname WHERE $userpname= '$user' ";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  $useresh = $row["$userpname"];
}

$sql1 = "SELECT * FROM $usertbname WHERE $userppass= '$pass' ";
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
  $_SESSION["loggedIn"] = true;
  header("location: clientarea");
  $_SESSION["useresh"] = $_POST['username'];
}

?>