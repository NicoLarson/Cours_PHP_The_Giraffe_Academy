<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="array.php" method="post">
		<input type="text" name="student">
		<input type="submit">
	</form>
	<?php
		/* $friends = array("Kevin","Karen","Oscar","Jim"); */
		/* echo $friends[2]; */
		/* $friends[10]="Yoyo"; */
		/* echo $friends[10]; */
		/* echo $friends[9]; */
		/* echo $firends[-1]; */

/* Associative array */
	$grades = array("Jim"=>"A+","Pam"=>"B-","Yoyo"=>"C+");
	echo $grades[$_POST["student"]];
	?>
</body>
</html>
