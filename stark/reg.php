<?php 

	include("db.php"); 
    $sales = $mysqli->query("SELECT sales FROM stark_gr ORDER BY ID DESC")->fetch_object()->sales; 
    $mysqli->close();

?>

<html> 
	<head>
		<title>House Stark Sales</title>

		<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
		<link rel="stylesheet" type="text/css" href="display.css">

	</head> 
	</body>
		<div class="wrapper">
 	 		<div class="message">
   		 		<h1>House Stark Sales:</h1><p></p>
                <h3>Werk de Stark sales totalen hier bij</h3>
                <h5>Momenteel staat de teller op 
		          <?php
		              print $sales;
                ?> sales</h5>
                    
                <form method="post" action="starkparse.php">
                    Nieuw totaal: <input type="text" name="sales" placeholder="Voer hier het totaal in" /><br /><br />
                    <input type="submit" value="Submit" />
                </form
                        
   		
 			</div>
		</body> 
</html>