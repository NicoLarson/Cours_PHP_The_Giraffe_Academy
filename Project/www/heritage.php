<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Heritage</title>
</head>
<body>
<?php
class Chef{
			function makeChicken(){
		echo "The chef makes chicken <br>";
	}
function makeSalad(){
		echo "The chef makes salad <br>";
	}
function makeSpecialDish(){
		echo "The chef makes special dish <br>";
	}
}
class ItalianChef extends Chef{
	function makePasta(){
		echo "The chef makes pasta <br>";
	}
	function makeSpecialDish(){
		echo "The chef makes special italian dish <br>";
	}
}
$chef = new Chef();
$chef->makeSpecialDish();

$italianChef = new ItalianChef();
$italianChef->makeSpecialDish();
?>	
</body>
</html>
