<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Paint Estimate</h1>
<?php
    include_once('inc-rectangle-object.php');
	// your code here
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    
    $longWall = new Rectangle();
    $shortWall = new Rectangle();
    
    $longWall->setX($height);
    $longWall->setY($length);
	
    $shortWall->setX($height);
    $shortWall->setY($length);
	
	
	print("The total area is $totalArea square feet.");
?>
</body>
</html>