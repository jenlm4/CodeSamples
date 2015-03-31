<html>
<head>

	<title>Your custom poster</title>
	<link href="poster.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'> <!-- Web font for galaxy poster -->
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'> <!-- Web font for orange poster -->
	<link href='http://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'> <!-- Web font for swirl poster -->
	
</head>
<body>
	<h1>Here is your poster!</h1>
	
	<?php
		/* get from URL */
		if(isset($_POST['posterBtn'])) { $posterBtn = $_POST['posterBtn']; } else { $posterBtn = ""; }
		if(isset($_POST['posterTxt'])) { $posterTxt = $_POST['posterTxt']; } else { $posterTxt = ""; }
		
		/* switch stmt to select poster and call stringBreak function with character length parameter passed in */
		switch($posterBtn)
		{
			case "a":
				echo "<div id='somBkgd'>";
	  			echo "<div class='words'><p id='somText'>".stringBreak($posterTxt, 80)."</p></div></div>";
				break;
			case "b":
				echo "<div id='orBkgd'>";
	  			echo "<div class='words'><p id='orText'>".stringBreak($posterTxt, 80)."</p></div></div>";
				break;
				
			case "c":
				echo "<div id='swBkgd'>";
	  			echo "<div class='words'><p id='swText'>".stringBreak($posterTxt, 50)."</p></div></div>";
				break;
				
			default:
				echo "<p id='errMsg'>You did not select a poster.</p>";
				break;
		} 
	?>	
</body>
</html>

<?php

/* breaks user-input text for poster into individual words then pieces together with break after specific number of characters */

	function stringBreak ($posterTxt, $breakLength)
	{
		$tempArray = explode(' ', $posterTxt);
				
		$runningLength = 0;
		$lastSize = 0;
		$finalString = "";
		
		foreach ($tempArray as $word)
		{
			$finalString .= $word. ' ';
			$runningLength = strlen($finalString);
			if (($runningLength - $lastSize) >= $breakLength)
			{
				$finalString .= "<br>";
				$lastSize = strlen($finalString);
			}	
		}	
		return $finalString;
	}
?>








