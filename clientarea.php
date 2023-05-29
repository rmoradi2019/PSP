<?php
session_start();
if($_SESSION["loggedIn"] != true){
    header("Location: ./");
    exit;
  }

$username = $_SESSION["useresh"];
include 'incdata/config.php';
include 'incdata/clientarea.php';

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="img/fav.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>پنل کاربری</title>
</head>
<body>

<div class="home-cadr">

<div class="row">
  <div class="column"><img class="svg-img" src ="img/panel.svg" alt="Panel Image"/>
</div>
  <div class="column">
    <h3 class="h2-panel">سلام <?php echo $namesh; ?> عزیز خوش آمدید</h3>
    
    <div class="row1">
    
    <div class="column1">
    <button id="open-popup-btn" style="--clr:#0FF0FC" class="button-panel"><span>آدرس درگاه من</span><i></i></button>
</div>

<div class="column1">
<a href="withdraw"><button style="--clr:#0FF0FC" class="button-panel"><span>برداشت وجه</span><i></i></button></a>
</div>

<div class="column1">
<button class="button-panel" style="--clr:#0FF0FC"><span>موجودی: <?php echo $balance; ?> تومان</span><i></i></button>
</div>

<div class="column1">
<a href="bank"><button class="button-panel" style="--clr:#0FF0FC"><span>حساب بانکی من</span><i></i></button></a>
</div>

<div class="column1">
<a href="payments"><button class="button-panel" style="--clr:#0FF0FC"><span>تراکنش ها</span><i></i></button></a>
</div>

<div class="column1">
<button class="button-panel" style="--clr:#0FF0FC"><span>ویرایش مشخصات (موقتا غیرفعال)</span><i></i></button>
</div>

<div class="column1">
<a href="logout"><button class="button-panel" style="--clr:#0FF0FC"><span>خروج از حساب</span><i></i></button></a>
</div>

<div class="column1">
<a href="withdraws"><button class="button-panel" style="--clr:#0FF0FC"><span>وضعیت برداشت ها</span><i></i></button></a>
</div>

<div class="column1">
<button class="button-panel" style="--clr:#0FF0FC"><span>بزودی ...</span><i></i></button>
</div>

    </div>

  </div>
</div> 

</div>

 
	<div class="center-popup">
			<div class="icon-popup">
				<i class="fas fa-check"></i>
			</div>
    <?php $mywebpage = "https://pay.sorenafile.ir/user/$username"; ?>
		<div class="description" id="myInput">
	        <?php echo $mywebpage; ?>
		</div>
	        
	    <div class="dismiss-btn">
	    	<button id="dismiss-btn">فهمیدم</button>
	    </div>
			
	</div>


<script src="script.js"></script>

</body>
</html>