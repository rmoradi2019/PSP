<?php
session_start();
if($_SESSION["loggedIn"] != true){
    header("Location: ./");
    exit;
  }


  $username = $_SESSION["useresh"];
  include 'incdata/config.php';
  include 'incdata/getcard.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="img/fav.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ثبت اطلاعات بانکی</title>
</head>
<body>

<div class="home-cadr">

<div class="row3">

<div class="column3">
    <h2 class="card-set">لطفا شماره کارت بانکی خود را وارد کنید</h2>

    <form class="formclass" method="post" action="incdata/setcard">

<br>
            <div class="form-group">
            <label>شماره کارت ثبت شده : <?php echo $cardnumber; ?></label>
            <br>
            <label>شماره کارت</label>
                <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o" style="color:white;"></i></span>
                  <input class="form-control" type="text" name="cardnumber" required="" placeholder="شماره کارت بانکی">
                </div>
            </div>

<button class="btn" type="submit" value="submit" name="submit">ثبت حساب</button>

</form>
</div>

</div>

</div>

</body>
</html>