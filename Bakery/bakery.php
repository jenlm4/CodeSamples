<html>

<head>

	<title>E17 U04B</title>

	<!--
	
	E17 Jennifer McVey U04B
	
	What objectives are you demonstrating? creating a Web page in PHP based on passed data
		
	-->

	<link href="bakery.css" rel="stylesheet" type="text/css" id="bakery" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'> <!-- Web font -->
	
	
</head>


<body>
	<div id="title">
		<h1>Sugar and Spice</h1>
		
		<h2>Your order summary and receipt</h2>
	
	</div><!-- end #title -->
	<div id="results">
	<?php
	
		/* get from URL */
		if(isset($_POST['name'])) {$name = $_POST['name']; } else {$name = ""; }
		if(isset($_POST['carrot'])) { $carrot = $_POST['carrot']; } else { $carrot = ""; }
		if(isset($_POST['strawSp'])) { $strawSp = $_POST['strawSp']; } else { $strawSp = ""; }
		if(isset($_POST['appRasCr'])) { $appRasCr = $_POST['appRasCr']; } else { $appRasCr = ""; }
		if(isset($_POST['pearAlmTart'])) { $pearAlmTart = $_POST['pearAlmTart']; } else { $pearAlmTart = ""; }
		if(isset($_POST['vanCake'])) { $vanCake = $_POST['vanCake']; } else { $vanCake = ""; }
	
		/* calculate order totals and tax */
		$totalqty = 0;
		$totalqty = $carrot + $strawSp + $appRasCr + $pearAlmTart + $vanCake;	
		
		$totalamount = 0.00;
				
			define('CARROT', 12);
			define('STRAWSP', 14);
			define('APPRASCR', 14);
			define('PEARALMTART', 15);
			define('VANCAKE', 12);
			
		$totalamount = $carrot * CARROT
						 + $strawSp * STRAWSP
						 + $appRasCr * APPRASCR
						 + $pearAlmTart * PEARALMTART
						 + $vanCake * VANCAKE;
		
	/* checks if user entered quantities and calculates quantities if true */
		if( $totalqty == 0 )
		{
			echo '<p>';
			echo 'You did not order anything on the previous page.<br>';
			echo '</p>';	
		}
		else 
		{
			echo '<p>'.$name.', you ordered:</p><br>';
			if ($carrot > 0)
				echo $carrot.' carrot cakes<br>';
			if ($strawSp > 0)
				echo $strawSp.' strawberry sponge cakes<br>';
			if ($appRasCr > 0 )
				echo $appRasCr.' apple raspberry crumbles<br>';
			if ($pearAlmTart > 0)
				echo $pearAlmTart.' pear almond tarts<br>';
			if ($vanCake > 0)
				echo $vanCake.' vanilla cakes<br><br>';		
		}
			
	/* displays subtotal, calculates tax and displays total */			 
		echo "Subtotal: $".number_format($totalamount,2)."<br>";
		
		$taxrate = 0.09;                         /* local sales tax is 9% */
		$totalamount = $totalamount * (1 + $taxrate);
		echo "Total including tax: $".number_format($totalamount,2)."<br>";
		 
	/* Thank you message */
		echo "<p>Thank you for your order! Please give us one full business day to make your desserts.</p>";	
	?>
	
	</div>
	<img src="bakeryFilter.jpg" alt="glass bakery display counter" width="2030px" height="985px" id="goodies">
	
</body>
</html>
