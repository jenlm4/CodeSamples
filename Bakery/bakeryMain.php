<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Bakery</title>
	
	<!--
	
	Jennifer McVey U03B
	
	Objectives demonstrated: creating a Web page in PHP based on passed data
	
	Files used: bakery.css, bakery.php, bakeryFilter.jpg
		
	-->

	<link href="bakery.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>  <!-- Web font -->
	<?php
	
	/* media query to increase font in Chrome and adjust footer */
	$browser = $_SERVER['HTTP_USER_AGENT'];
	if (preg_match("/Chrome/", $browser))
		{
			echo "<style> body { font-size: 110%; }</style>";
			echo "<style> footer { margin-top: 39%; }</style>";
		}
	?>
</head>
<body>	
	<img src="bakeryFilter.jpg" alt="glass bakery display counter" width="2030px" height="985px" id="goodies"> <!-- background image -->
	<div id="container">
		<header>
			<h1>Welcome to Sugar and Spice!</h1>
			<div id="topText">
				<h2>We heard your requests and we've chosen five of your favorites and made it easy to order ahead of time with our online order form below. We only use finest ingredients and use local sources as much as possible. Everything is made with butter and love, enjoy!</h2>
			</div> <!-- end #topText -->
		</header>
		
	<!-- dessert order form, processed by bakery.php -->
		<div id="orderForm">
			<form action="bakery.php" method="post">
				<h2>Please select from these delicious confections:</h2>
				<fieldset id="choose">
					<label for="name">Please enter your name:</label>
					<input type="text" name="name" id="name" maxlength="25" placeholder="Enter name">				
					
					<label for="carrot">Carrot Cake - $12.00</label>
					<input type="text" name="carrot" id="carrot" maxlength="4" placeholder="Enter quantity">
					
					<label for="strawSp">Strawberry Sponge Cake - $14.00</label>
					<input type="text" name="strawSp" id="strawSp" maxlength="4">
					
					<label for="appRasCr">Apple Raspberry Crumble - $14.00</label>
					<input type="text" name="appRasCr" id="appRasCr" maxlength="4">
					
					<label for="pearAlmTart">Pear Almond Tart - $15.00</label>
					<input type="text" name="pearAlmTart" id="pearAlmTart" maxlength="4">
					
					<label for="vanCake">Vanilla Cake - $12.00</label>
					<input type="text" name="vanCake" id="vanCake" maxlength="4">
					
					<input type="submit" value="Submit Order" id="submit" >					
				</fieldset>			
			</form>		
		</div> <!-- end #orderForm -->
	
	<!-- photo attribute -->
		<footer> 
			<p>Background photo from commons.wikimedia.org, courtesy of Patrick M on Flickr. License: http://creativecommons.org/licenses/by-sa/2.0/legalcode<p>
		</footer>
	</div> <!-- end #container -->
	
</body>
</html>