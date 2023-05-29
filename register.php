<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-home.css">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="img/fav.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ایجاد حساب کاربری</title>
</head>
<body>

<div class="login-cadr">

<div class="row">

  <div class="column">
  <h2 class="h2-login">ساخت حساب کاربری</h2>
  <form class="formclass" method="post" action="confirm">

            <div class="form-group">
                <label>نام کاربری</label>
                <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o" style="color:white;"></i></span>
                  <input class="form-control" type="text" name="username" required="" placeholder="Username" required>
                </div>
            </div>

            <div class="form-group">
                <label>کلمه عبور</label>
                <div class="input-group"><span class="input-group-text"><i class="fa fa-500px" style="color:white;"></i></span>
                  <input class="form-control" type="password" name="password" required="" placeholder="*********" required>
                </div>
            </div>

            <div class="form-group">
                <label>شماره موبایل</label>
                <div class="input-group"><span class="input-group-text"><i class="fa fa-address-book" style="color:white;"></i></span>
                  <input minlength="11" maxlength="11" class="form-control" type="text" name="number" required="" placeholder="09" required>
                </div>
            </div>

            <div class="form-group">
                <label>نام و نام خانوادگی</label>
                <div class="input-group"><span class="input-group-text"><i class="fa fa-user-o" style="color:white;"></i></span>
                  <input class="form-control" type="text" name="name" required="" placeholder="نام واقعی خود را وارد کنید" required>
                </div>
            </div>
<button class="btn" type="submit" value="submit" name="submit">ثبت نام</button>
</form>


  </div>
</div> 



</div>

</body>
</html>