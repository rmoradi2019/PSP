<?php
    session_start();


	$PIN = 'RR6m11RBSEcn088UTp57';
	$wsdl_url = "https://pec.shaparak.ir/NewIPGServices/Confirm/ConfirmService.asmx?WSDL";
	
	
	$Token = $_REQUEST ["Token"];
	$status = $_REQUEST ["status"];
	$OrderId = $_REQUEST ["OrderId"];
	$TerminalNo = $_REQUEST ["TerminalNo"];
	$Amount = $_REQUEST ["Amount"];
	$RRN = $_REQUEST ["RRN"];
	if ($RRN > 0 && $status == 0) {
	    
		
		$params = array (
				"LoginAccount" => $PIN,
				"Token" => $Token 
		);
		
		$client = new SoapClient ( $wsdl_url );
		
		try {
			$result = $client->ConfirmPayment ( array (
					"requestData" => $params
					
			) );
			if ($result->ConfirmPaymentResult->Status != '0') {
				$err_msg = "(<strong> کد خطا : " . $result->ConfirmPaymentResult->Status . "</strong>) " .
		 		 $result->ConfirmPaymentResult->Message ;
		 		 
			}
		} catch ( Exception $ex ) {
			$err_msg =  $ex->getMessage()  ;
		}
	}elseif($status) {
		$err_msg = "کد خطای ارسال شده از طرف بانک $status " . "";
	}else {

		$err_msg = "پاسخی از سمت بانک ارسال نشد " ;
	}
	
	
    $urlman = "https://" .$_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF'])."/reciept";

?>


<?php
if ($result->ConfirmPaymentResult->Status != '0') {
    
$stat11 = $result->ConfirmPaymentResult->Status;    
    
header("Location: $urlman?result=$stat11&OrderId=$OrderId");
exit();
   
}else {

$stat = $result->ConfirmPaymentResult->Status;
$resid = $result->ConfirmPaymentResult->RRN;
$message = 'پرداخت جدید به مبلغ '.$Amount.' در سورنا پی';
file_get_contents('https://raygansms.com/SendMessageWithCode.ashx?Username=rmoradi2019&Password=iqclsSQA1@1&Mobile=09052243521&Message='.urlencode($message).'');

include '../../incdata/config.php';

$username = basename(__DIR__);

$conn = new mysqli( $dbhost, $dbuser, $dbpass, $dbname);

$numberesh = $_SESSION["numbersh"];


$sql = "SELECT * FROM sw_users WHERE pUsername= '$username' ";

$result = $conn->query($sql);

while($row11 = $result->fetch_assoc()) {
    $cash = $row11["pCash"];
  }

$count_jobs = $conn -> query("SELECT MAX(pID) FROM sw_tarakonesh");
            $row = mysqli_fetch_array($count_jobs);
            $count = $row["MAX(pID)"];
            $id_new = $count + 1;
			$num = (int)str_replace(',', '', $Amount);
			$mablaghe = ( intval($num) * 5 ) / 100;
			$asli = intval($num) - $mablaghe;

			$new_mablagh = $cash + (intval($asli) / 10);

			$insert_data = $conn -> query("INSERT INTO sw_tarakonesh VALUE ('$id_new', '$username', '$numberesh', '$asli')");
			$insert_data1 = $conn -> query("UPDATE sw_users SET pCash = '$new_mablagh' WHERE pUsername = '$username'");

header("Location: $urlman?OrderId=$OrderId&Amount=$Amount&stat=$stat&resid=$resid");

exit();
    }
  


?>