<?php
session_start();
if($_SESSION["loggedIn"] != true){
    header("Location: ./");
    exit;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-home.css">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="img/fav.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>تراکنش های من</title>
</head>
<body>

<div class="login-cadr">

<h2 style="text-align:center; color: white;">تراکنش های من</h2>
<h2 style="text-align:center; color: white;">لیست تراکنش ها هر جمعه ساعت 12 حذف میشود</h2>

<table>
  <tr>
    <th>شماره تراکنش</th>
    <th>مبلغ</th>
    <th>پرداخت کننده</th>
  </tr>

  <?php
$user = $_SESSION["useresh"];
include 'incdata/config.php';
include 'incdata/payss.php';

?>
  
  
</table>

</div>

</body>
</html>