<?php 
session_start();
class SmsAPIContr
{

	function smssend($recipients, $message,$password,$api )
	{
		// try {
			

		// Set cURL options
		$curl = curl_init();

		// Set the JSON payload
		$sms = array(
			'Email' => 'aldrindelacruz3182@gmail.com',
			'Password' => $password,
			'ApiCode' => $api,
			'Recipients' => $recipients,
			'Message' => $message
		);


		curl_setopt($curl, CURLOPT_URL,'https://api.itexmo.com/api/brodcast');
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($sms));
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));





		// Execute the POST request
		$response = curl_exec($curl);
		curl_close($curl);



		// // Process the API response
		// if ($response) {
		//     $result = json_decode($response, true);
		//     if ($result['status'] == 'success') {
		//         echo 'SMS blast sent successfully!';
		//     } else {
		//         echo 'Failed to send SMS blast.';
		//     }
		// } else {
		//     echo 'API request failed.';
		// }


			return $response;
		// }
 		// catch (Exception $ex) {
		// 	return $ex→getMessage();		
		// }
	}
}
// 	}

// }
 ?>