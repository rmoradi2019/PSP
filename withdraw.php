<?php
session_start();
if($_SESSION["loggedIn"] != true){
    header("Location: ./");
    exit;
  }

  $username = $_SESSION["useresh"];
  include 'incdata/config.php';
  include 'incdata/checkcard.php';
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
    <title>برداشت وجه</title>
</head>
<body>

<div class="home-cadr">

<div class="row3">

<div class="column3">
    <h2 class="card-set">جهت برداشت وجه اطلاعات را وارد کنید</h2>

    <form class="formclass" method="post" action="incdata/withdraw">

<br>
            <div class="form-group">
            <label style="color: red !important; font-size:15px;"><?php echo $check; ?></label>
            <br>
            <label>موجودی شما : <?php echo $balance; ?> تومان</label>
            <br>
            <label>حداقل وجه قابل برداشت : 50 هزارتومان</label>
            <br>
            <label>مبلغ را وارد کنید</label>
                <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o" style="color:white;"></i></span>
                  <input <?php echo $dis; ?> class="form-control" type="number" name="price" required="" placeholder="مبلغ را به تومان وارد کنید">
                </div>
            </div>

<button class="btn" type="submit" value="submit" name="submit">ثبت برداشت</button>

</form>
</div>

</div>


</div>

</body>
</html>