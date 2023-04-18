<?php 
session_start();
class SmsAPIContr
{
	function smssend($recipients, $message,$password,$api )
	{
			
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

		// Execute the POST request
		return curl_exec($curl);
		curl_close($curl);

		}
	}
 ?>