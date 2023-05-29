<?php
include 'incdata/config.php';
session_start();

if($_SESSION["loggedIn"] == true){
  header("Location: clientarea");
  exit;
}

?>
<?php



if(isset($_POST['submit'])) 
{
  //Get User And Pass From Form
  $user = $_POST['username'];
  $pass = $_POST['password'];
  include 'incdata/login.php';
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
    <title>ورود به حساب</title>
</head>
<body>

<div class="login-cadr">

<div class="row">

  <div class="column">
  <h2 class="h2-login">ورود به حساب کاربری</h2>

  <form class="formclass" method="post">

<br>
            <div class="form-group">
                <label>نام کاربری</label>
                <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o" style="color:white;"></i></span>
                  <input class="form-control" type="text" name="username" required="" placeholder="Username">
                </div>
            </div>

            <div class="form-group">
                <label>کلمه عبور</label>
                <div class="input-group"><span class="input-group-text"><i class="fa fa-500px" style="color:white;"></i></span>
                  <input class="form-control" type="password" name="password" required="" placeholder="*********">
                </div>
            </div>
<label><?php 
if($eshtebahe == "1" || $eshtebahe2 == "1")
{ 
  echo "نام کاربری یا رمز عبور صحیح نیست";
} 
?>
</label>
<button class="btn" type="submit" value="submit" name="submit">ورود</button>
</form>

  </div>
</div> 

</div>

</body>
</html>