<?php



$stat = $_GET['stat'];
$OrderId = $_GET['OrderId'];
$Amount = $_GET['Amount'];
$resid = $_GET['resid'];


include 'data.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>تاییدیه پرداخت</title>
    <meta charset="UTF-8">
    <meta name="description" content="درگاه تراکنش های مالی امن">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="../../img/fav.ico">
    <link rel="stylesheet" href="../../css/dargah.css">


</head>
<body>
    

   
   <div class="main-menu" id="main-menu">
   <div class="topnav">
  <a class="active" href="https://pay.sorenafile.ir/user/<?php echo $username; ?>">صفحه اصلی</a>
</div>

<div class="info-panel">
    <span id="infopanel" class="title-info">نام پذیرنده:</span>
    <span id="infopanel" class="title-info"><?php echo $realname; ?></span>
 
    <img class="logo" src="../../img/fav.ico" alt="Logo">
</div>

<div>
    
<img class="head-image" src="../../img/home.svg" alt="head">


<button class="button"> وضعیت پرداخت : <?php
if ($stat != '0') {


echo "تراکنش ناموفق";

   
}else {

echo "تراکنش موفق";


}
?></button>

<button class="button"> مبلغ پرداختی : <?php echo $Amount ?> ریال</button> 
<button class="button">شماره سفارش: <?php echo $OrderId; ?></button>
<button class="button">شماره تراکنش: <?php echo $resid ?></button>




    
</div>



    </div>
   
   

</body>
</html>