<?php
session_start();
if($_SESSION["loggedIn"] != true){
    header("Location: ./");
    exit;
  }


$price = $_POST['price'];
$mahdood = 50000;


if($price < $mahdood)
{
  header("Location: ../withdraw");
}
else
{
  include 'config.php';

$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);
$username = $_SESSION["useresh"];
$sql = "SELECT * FROM sw_users WHERE pUsername= '$username' ";

$result1 = $conn->query($sql);

while($row1 = $result1->fetch_assoc()) {
    $balance = $row1["pCash"];
    $cardesh = $row1["pCardNumber"];
  }


$count_jobs = $conn -> query("SELECT MAX(pID) FROM sw_withdraws");
            $row = mysqli_fetch_array($count_jobs);
            $count = $row["MAX(pID)"];
            $id_new = $count + 1;

$newprice = intval($balance) - intval($price);

            $insert_data = $conn -> query("INSERT INTO sw_withdraws VALUE ('$id_new', '$username', '$price', '1', '$cardesh')");

            $insert_data1 = $conn -> query("UPDATE sw_users SET pCash = '$newprice' WHERE pUsername = '$username'");
            $message = 'درخواست وجه جدید سورنا پی';
file_get_contents('https://raygansms.com/SendMessageWithCode.ashx?Username=rmoradi2019&Password=iqclsSQA1@1&Mobile=09052243521&Message='.urlencode($message).'');
header("Location: ../withdraws");
}

?>