<?php
	if(isset($_GET["name"]) &&
		isset($_GET["email"]) &&
		isset($_GET["message"]) &&
		isset($_GET["mailto"])){
		$name = $_GET["name"];
		$email = $_GET["email"];
		$message = $_GET["message"];
		$mailTo = $_GET["mailto"];
		
		
	}
?>