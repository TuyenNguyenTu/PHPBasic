<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
	$colors = array("red","green","blue","yellow");
	foreach($colors as $value){
		echo "{$value} <br/>";
	} 
	$tax_rates = array('NC' =>7.8,'CA'=>8.2,'NY'=>8.875);
	echo "<ul>";
	foreach($tax_rates as $state => $rate){
		echo "<li> {$state} : {$rate} </li>";
	}
	echo "</ul>";
?>
</body>