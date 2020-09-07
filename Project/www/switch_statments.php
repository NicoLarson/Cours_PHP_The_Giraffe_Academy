<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="switch_statments.php" method="post">
		What was your grade?
		<input type="text" class="text" name="grade">
		<input type="submit"> 
	</form>
<?php
$grade = $_POST["grade"];
switch($grade){
case "A":
	echo "You did amazing";
	break;
	case "B":
	echo "Good";
	break;
	case "C":
	echo "Ok";
	break;
	case "D":
	echo "A little bad";
	break;
	case "E":
	echo "Bad";
	break;
	case "F":
	echo "Bad bad";
	break;
	default:
	echo "Invalid grade";
	break;
	
}


?>
</body>
</html>
