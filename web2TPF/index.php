<?php
	
	require_once "init.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>tpf</title>
</head>
<body>
	<img src="https://goo.gl/1H14Q6" alt="logo" width="300">
	<a href="<?php
	echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>">Sing in with linkedIn</a> 
	<!-- <a href="https://developer.linkedin.com/docs/oauth2#ux"> Sing in  with LinkedIn</a> -->
</body>
</html>