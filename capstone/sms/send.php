<?php 
	if (isset($_POST['submitmes'])) {
		include_once 'SmsAPIContr.php';

		// echo "welcome to send";
		$recipients = trim($_POST['recipients']);
	    $message = $_POST['message'];
	    $password = "Aldrin24";
	    $api = "TR-ALDRI620422_G2NN0";
	    
		$send = new SmsAPIContr();

		$send->smssend($recipients, $message,$password,$api);

		if ($send) {
			echo "message sent";
		}elseif (!$send) {
			echo "server error";
		}else{
			echo "something wrong happened";
		}
	}





?>