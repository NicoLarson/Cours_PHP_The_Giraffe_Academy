<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<form action="post_vs_get.php" method="post">
Name: <input type="text" name="name"><br>
Password:	<input type="password" name="password"><br>
	<input type="submit">
</form>		
<br><br>
<?php
echo $_POST[name];
echo $_POST[password];
?>
</body>
</html>
