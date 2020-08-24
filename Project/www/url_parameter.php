<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="url_parameter.php" method="get">
Name: <input type="text" name="name">
 <input type="submit">
</form>

<?php 
$name = $_GET["name"];
echo "$name";
?>
</body>
</html>
