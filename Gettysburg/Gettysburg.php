<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Gettysburg</title>
	<!--
	Jennifer McVey U03C

	Objective: reading a file in PHP and creating a Web page.
	
	Files used: getty.css, gettysburgSunset.jpg, Gettysburg.txt
	-->
	
	<link href="getty.css" rel="stylesheet" type="text/css">
	
	<!-- increased font for Chrome -->
	<?php
		$browser = $_SERVER['HTTP_USER_AGENT'];
		if (preg_match("/Chrome/", $browser))
		{
		echo "<style> body { font-size: 110%; }</style>";
		}
	?>
</head>
<body>

	<div id="background">  <!-- background photo via css -->
		<div id="box">      <!-- for styling contents of file -->
			<?php
			
			$gettyfile = "Gettysburg.txt";
			/* variable to identify first line -*/
			$ok=0;
			
			$file = fopen($gettyfile, "r") or exit("No file!");
			while(!feof($file))
			{
				$line = fgets($file);
				if($ok == 0) /* if first line, apply <h1> tags */
				{
					print "<h1>$line</h1>";
					$ok = 1;
				}
				else         /* if not first line, add line breaks after 50 characters */
				{
					print "$line<br>";
					if(strlen($line) > 50) { print "<br>"; }					
				}
			}
			fclose($file);
			?>
		
		</div> <!-- end #box -->
		
		<div id="at">  <!-- photo attribute -->
		
			<p>Photo courtesy of BIGDOG3c @ flickr</p>
		</div> <!-- end #at -->
	
	</div> <!-- end #background -->
</body>
</html>