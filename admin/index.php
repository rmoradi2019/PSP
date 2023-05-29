<?php

session_start();
if($_SESSION["LogIn"] != true){
    header("Location: login");
    exit;
  }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/homepage.css">
    <link rel="icon" type="image/x-icon" sizes="32x32" href="../img/fav.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>پنل کاربری</title>
</head>
<body>

<div class="home-cadr">

<div class="row">
  <div class="column">
  <img class="svg-img" src ="../img/panel.svg" alt="Panel Image"/>
</div>
  <div class="column">
    
    <div class="row1">
    
    <div class="column1">
    <button id="open-popup-btn" style="--clr:#0FF0FC" class="button-panel"><span>تایید پرداخت</span><i></i></button>
</div>

<div class="column1">
<a href="../logout"><button class="button-panel" style="--clr:#0FF0FC"><span>خروج از حساب</span><i></i></button></a>

</div>



<div class="column1">
<?php 

include '../incdata/config.php';
$conn = new mysqli( "localhost", $dbuser, $dbpass, $dbname);

$count_jobs = $conn -> query("SELECT MAX(pID) FROM sw_withdraws");
$row = mysqli_fetch_array($count_jobs);
$count = $row["MAX(pID)"];
$x = $count;

while($x >= 0) {
    $sql1 = "SELECT * FROM sw_withdraws WHERE pID = $x";
$result1 = $conn->query($sql1);

while($row1 = $result1->fetch_assoc()) {
  $job_name = $row1["pCash"];
  $job_slot = $row1["pCard"];
  $job_slot1 = $row1["pRealName"];
  $job_slot0 = $row1["pStatus"];
  $job_slot3 = $row1["pID"];
  if ( $job_slot0 == 1 )
  {
    $st = "Faal";
  }
  elseif($job_slot0 == 0)
  {
    $st = "Off";
  }
}

    echo "<h4 class=myh4>".$job_slot3." : ".$job_name." : ".$job_slot." : ".$job_slot1." : ".$st."</h4>";
    $x--;
  }

?>
</div>

    </div>

  </div>
</div> 

</div>

 
	<div class="center-popup">
			<div class="icon-popup">
				<i class="fas fa-check"></i>
			</div>
    
		<div class="description" id="myInput">
	  
    <form action="pay" method="post">

    <input type="text" name="id" placeholder="ID">

    <button type="submit">Confirm</button>
    </form>

		</div>
	        
	    <div class="dismiss-btn">
	    	<button id="dismiss-btn">لغو</button>
	    </div>
			
	</div>


<script src="../script.js"></script>

</body>
</html>