<!DOCTYPE html>
<!--	Author: Miles Hollifield
		Date:	    3/8/2020
		File:	software-order.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Software Order</h1>
<?php
    include_once('inc-order-object.php');
	// your code here
    $cost = $_POST['cost'];
	$items = $_POST['items'];
    
    $order = new Order();
    
    $order->setItemCost($cost);
    $order->setNumItems($items);
    
    $subTotal = $order->getSubTotal();
    $tax = $order->getSalesTax();
    $shippingHandling = $order->getShippingHandling();
    $total = $order->getTotal();
	
	// you can change the variables in the table if you need to use different names
	print("	<table>
			<tr><td>Sub-Total:</td><td>$$subTotal</td></tr>
			<tr><td>Tax:</td><td>$$tax</td></tr>
			<tr><td>Shipping and Handling:</td><td>$$shippingHandling</td></tr>
			<tr><td>TOTAL:</td><td>$$total</td></tr>
			</table>");
?>
</body>
</html>