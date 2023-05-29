<?php

include 'data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="../../img/fav.ico">
    <link rel="stylesheet" href="../../css/dargah.css">
    <title>درگاه پرداخت <?php echo $realname; ?></title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script type='text/javascript'>
function comma_digit(t)
{
	$(t).val(function(index, value) {
		return value
		.replace(/\./g, '000')
		.replace(/\D/g, '')
		.replace(/\B(?=(\d{3})+(?!\d))/g, ",") 
		;
	});
}
function show_input() {

	var price = $('#input_price').val().replace(/\,/g, '');
	alert(price);
}
</script>
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
<form id="form" method="POST" action="payment">

<img class="head-image" src="../../img/home.svg" alt="head">

<input autocomplete="off" maxlength="11" name="Amount" id="Amount" placeholder="مبلغ را به ریال وارد کنید" data-validate="required" class="inputAmount" type="text" onKeyup="comma_digit(this)" value="" required>
<input autocomplete="off" maxlength="11" name="number" id="number" placeholder="شماره موبایل خود را وارد کنید" data-validate="required" class="inputAmount" type="text" value="" required>

</div>

<button class="draw" type="submit">پرداخت</button>
<div class="header"><span>پرداخت ایمن با درگاه پارسیان</span></div>

</form>
</div>



</body>
</html>