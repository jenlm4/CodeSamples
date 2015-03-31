<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Poster</title>
	
	<!--
	
	Jennifer McVey U03A
	
	Objectives demonstrated:  creating a Web page in PHP, creation of a Web page based on passed data
	
	Files used: abstractOrange_150.jpg, abstractOrange_1280.jpg, abstractSwirl_150.png, abstractSwirl_1280.png, poster.css, poster.php, posterMain.php, Sombrery_Galaxy_180.jpg, Sombrery_Galaxy_1280.jpg	
	-->

	<link href="poster.css" rel="stylesheet" type="text/css">
	
	<!-- media query for Chrome -->
	<?php
		$browser = $_SERVER['HTTP_USER_AGENT'];
		if (preg_match("/Chrome/", $browser))
		{
			echo "<style>body { font-size: 120%; }</style>";
			echo "<style>textarea { margin-left: 14.5%; height: 10%; overflow: hidden;}</style>";
		}
	?>

</head>
<body>

	<header>
		<h1>Make Your Own Poster</h1>	
	</header>
	
		<form action="poster.php" method="post">
		
		<!-- inputs for selection of poster -->
			<fieldset>
				<h2>Choose a poster</h2>
				<label class="posterBtn">
			      <input id="post1" type="radio" name="posterBtn" value="a">
			      <img src="Sombrero_Galaxy_180.jpg">
		  		</label>
		  		<label class="posterBtn">
			      <input id="post2" type="radio" name="posterBtn" value="b">
			      <img src="abstractOrange_150.jpg">
		  		</label>
		  		<label class="posterBtn">
			      <input id="post3" type="radio" name="posterBtn" value="c">
			      <img src="abstractSwirl_150.png">
		  		</label>
		  	</fieldset>
		  	
		 <!-- input for text -->
		  	<fieldset id="entText">
		  		<h2>Enter text for poster</h2>
		  		<textarea placeholder="Enter what you want your poster to say (maximum 250 characters)..." rows="6" cols="50" name="posterTxt" maxLength="250"></textarea><br>	  		 
		  	</fieldset>
		  	
		 <!-- submit button -->
		  	<input type="submit" value="Make poster" id="submit" >
		</form>
	
	<!-- attribute -->
	<footer>	
		<p>Sombrero galaxy photo courtesy of NASA via wikimedia.org</p>
	</footer>


</body>
</html>