<?php


$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);

$count_jobs = $conn -> query("SELECT MAX(pID) FROM sw_tarakonesh");
$row = mysqli_fetch_array($count_jobs);
$count = $row["MAX(pID)"];

$x = 1;
while($x <= $count) {
    $sql1 = "SELECT * FROM sw_tarakonesh WHERE pID = $x AND pGirande = '$user'";
$result1 = $conn->query($sql1);
$row1211 = $result1->fetch_assoc();

if(!isset($row1211))
{
    $x++;
    continue;
}
else
{

$sql12 = "SELECT * FROM sw_tarakonesh WHERE pID = $x AND pGirande = '$user'";
$result12 = $conn->query($sql12);

while($row12 = $result12->fetch_assoc()) {
  $statusesh = $row12["pUserNumber"];
}

$sql121 = "SELECT * FROM sw_tarakonesh WHERE pID = $x AND pGirande = '$user'";
$result121 = $conn->query($sql121);

while($row121 = $result121->fetch_assoc()) {
  $idish = $row121["pID"];
}



$sql = "SELECT * FROM sw_tarakonesh WHERE pID = $x AND pGirande = '$user'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  $money = $row["pPrice"];
}
    echo "<tr>";
    echo "<td>".$idish."</td>";
    echo "<td>".$money." ریال</td>";
    echo "<td>".$statusesh."</td>";
    echo "</tr>";
    $x++;
}
  }

?>