<?php
	if (isset($_POST["ftp-company-name"])){
		$company = $_POST["ftp-company-name"]; 
		$username = $_POST["ftp-user-name"]; 
		$password = $_POST["ftp-password"];

		$url = "ftp://$username:$password@ftp2.sdgeconsult.com/$company";

		header("Location: $url") 
	}else{
		// Do Nothing
	}
?>