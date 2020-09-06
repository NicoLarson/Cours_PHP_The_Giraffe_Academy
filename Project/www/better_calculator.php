<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Better calculator</title>
</head>
<body>
	<header>Better Calculator </header>	
	<main>
		<form action="better_calculator.php" method="post">
		First num:	<input type="number" step="0.001" name="num1"><br>
		OP:	<input type="text" name="op"><br>
		Second num:	<input type="number" step="0.001" name="num2"><br>
			<input type="submit">
		</form>
<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];
if($op=="+"){
	echo $num1 + $num2;
}elseif($op=="-"){
	echo $num1 - $num2;
}elseif($op=="*"){
	echo $num1 * $num2;
}elseif($op=="/"){
	echo $num1 / $num2;
}else{
	echo "Invalid Operator";
}

?>
	</main>
</body>
</html>
