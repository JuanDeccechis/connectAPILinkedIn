<?php

	$client_id = "78ao992m91r90l";
	$client_secret = "uesqaLazG8TQuFll";
	$redirect_uri = "http://localhost/proyectos/web%202/web2TPF/";//auth/linkedin";
	$csrf_token = 748648;
	$scopes = "r_bassicprofile$20r_emailaddress";

	
/*	function curl($url, $parameters){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
		$headers = [];
		$headers[] = "Content-Type: application/x-www-form-urlencoded";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		return $result;

	}

	function getCallback(){

		session_start();
		$client_id = "78ao992m91r90l";
		$client_secret = "uesqaLazG8TQuFll";
		$redirect_uri = "http://localhost/proyectos/web%202/web2TPF/";
		$csrf_token = 748648;
		$scopes = "r_bassicprofile$20r_emailaddress";
		if(isset($_REQUEST['code'])){
			$core = $_REQUEST['code'];
			$url = "http://www.linkedin.com/oauth/v2/accessToken";
			$params = [
					'client_id' => $client_id,
					'client_secret' => $client_secret,
					'redirect_url' => $redirect_url,
					'code' => $code,
					'grant_type' => 'authentication_code'
			];
			$accessToken = curl($url, http_build_query($params));
			var_dump($accessToken);
			die();
		}
	}

*/
?>