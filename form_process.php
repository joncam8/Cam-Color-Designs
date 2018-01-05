<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$need = $_POST['need'];
$message = $_POST['message'];


$from = "joncam7237@att.net";				   
$to = "joncam7237@att.net";
$subject = "Client/Potental Client";
$body = "Name: $name \n Contact# $phone \n Email: $email \n Need: $need \n\n Message: $message";

mail ($to,$subject,$body);
?>

<html>
<head>
	<title>Thank You</title>
    
	<style>
		* {
			margin:0;
			padding:0;
			font-family:Khmer UI;
			}	
	
		img {
			width:100%;
			height:auto;
			margin:auto;
			}
	
		#logo {
			background-color:#014d83;
			padding:2%;
			margin:auto;
			max-width:400px;
			width:90%;
			margin-top:40px;
			box-shadow:inset 0px 0px 5px #444;
			}
	
		section {
			width:90%;
			max-width:800px;
			margin:auto;
			padding:3%;
			border:1px dashed #666;
			border-radius:8px;
			margin-top:40px;
			margin-bottom:40px;
			}
		
		h1 {
			background-color:#014d83;
			padding:2%;
			color:#fff;
			border-radius:8px;
			text-align:center;
			}
			
		p {
			padding:2%;
			margin-top:20px;
			color:#666;
			line-height:25px;
			}
			
		span {
			background-color:#014d83;
			padding:5px;
			border-radius:8px;
			color:#fff;
			font-size:12px;c
			}
			
		button {
			background-color:#014d83;
			padding:10px;
			border-radius:8px;
			color:#fff;
			border:none;
			font-size:24px;
			margin-left:15px;
			margin-top:20px;
			cursor:pointer;
			}	
	</style>
</head>

<body>
	<div id="logo"><img src="public_html/testsite/images/logo_002.png" width="719" height="97"></div>
    
	<section>
		<h1>Your messages has been sent.</h1>
		<p>Thank you for visiting Cam Color Designs, you will receive a response about your design needs within 24 to 48 hours. If you would like a quicker response, you can send me a text at 708 268-8075 and I will get back to you as soon as possible.</p>

		<p>Click on the <span>Back</span> button below to go back to Cam Color Designs.</p>
	  <a href="http://www.camcolordesigns.com" target="_blank"><button>Back</button></a>
	</section>
</body>
</html>