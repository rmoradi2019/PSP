<?php


$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);

$count_jobs = $conn -> query("SELECT MAX(pID) FROM sw_withdraws");
$row = mysqli_fetch_array($count_jobs);
$count = $row["MAX(pID)"];


for ($x = 1; $x <= $count; $x++) {
    $sql1 = "SELECT * FROM sw_withdraws WHERE pID = $x AND pRealName = '$user'";
$result1 = $conn->query($sql1);

$row111 = $result1->fetch_assoc();

if(!isset($row111))
{
    $x++;
    continue;
}
else
{
    



$sql12 = "SELECT * FROM sw_withdraws WHERE pID = $x AND pRealName = '$user'";
$result12 = $conn->query($sql12);

while($row12 = $result12->fetch_assoc()) {
  $statusesh = $row12["pStatus"];
}

$sql121 = "SELECT * FROM sw_withdraws WHERE pID = $x AND pRealName = '$user'";
$result121 = $conn->query($sql121);

while($row121 = $result121->fetch_assoc()) {
  $idish = $row121["pID"];
}

if($statusesh == 1)
{
$stat = "انجام نشده";
}
elseif ($statusesh == 0)
{
$stat = "انجام شده";
}

$sql = "SELECT * FROM sw_withdraws WHERE pID = $x AND pRealName = '$user'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  $money = $row["pCash"];
}
    echo "<tr>";
    echo "<td>".$idish."</td>";
    echo "<td>".$money." تومان</td>";
    echo "<td>".$stat."</td>";
    echo "</tr>";
    
}
  }

?>