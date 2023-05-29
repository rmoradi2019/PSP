<?php
$username = $_POST["username"];
$password = $_POST["password"];
$number = $_POST["number"];
$realname = $_POST["name"];

$code = rand(11111,99999);
$message = "کد تایید شما در سورنا  " .$code. " می باشد ";
    file_get_contents('https://raygansms.com/SendMessageWithCode.ashx?Username=rmoradi2019&Password=iqclsSQA1@1&Mobile='.$number.'&Message='.urlencode($message).'');
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
    <title>تایید شماره موبایل</title>
</head>
<body>

<div class="login-cadr">

<div class="row">

  <div class="column">
  <h2 class="h2-login">کد تایید ارسال شده به شماره موبایل را وارد کنید</h2>
  <form class="formclass" method="post" action="confirm-number">

            <div class="form-group">
                <label>کد تایید را وارد کنید</label>
                <div class="input-group"><span class="input-group-text"><i class="fa fa-address-book" style="color:white;"></i></span>
                  <input minlength="5" maxlength="5" class="form-control" type="text" name="code" required="" placeholder="کد تایید شما" required>
                </div>
            </div>

                  <input type="hidden" name="codeorg" value="<?php echo $code; ?>">
                  <input type="hidden" name="username" value="<?php echo $username; ?>">
                  <input type="hidden" name="password" value="<?php echo $password; ?>">
                  <input type="hidden" name="number" value="<?php echo $number; ?>">
                  <input type="hidden" name="name" value="<?php echo $realname; ?>">



<button class="btn" type="submit" value="submit" name="submit">تایید شماره</button>
</form>


  </div>
</div> 

</div>

</body>
</html>