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
	$price = array(141.95,212.84,411,10.95);
	$sum  = (141.95+212.84+411+10.95);
	$tb = $sum/(count($price));
	echo($sum);
	echo("<br/>");
	echo($tb);
	echo("<br/>");
	$numbers = array(1,2,3,4,5,6,7,8,9,10);
	unset($numbers[2]);
	unset($numbers[6]);
	$numbers = array_values($numbers);

	for($i=0;$i<count($numbers);$i++){
		echo("	".$numbers[$i]);
	}
	
	
	
?>
</body>
</html>