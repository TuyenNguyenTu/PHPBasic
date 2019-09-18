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
	for($i=0;$i<101;$i++)
{
		if($i%2==0){
			echo($i." ");
		}
		else{
			echo(" "."<b>{$i}</b>"." ");
		}
	}
?>

</body>