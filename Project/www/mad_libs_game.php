<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<head>
	<h1>Mad Libs Game</h1>
</head>
<main>
	<form action="mad_libs_game.php">
Color: <input type="text" name="color"><br>
Plural Noun: <input type="text" name="pluralNoun"><br>
Celebrity: <input type="text" name="celebrity"><br>


<input type="submit">

</form>
<?php 
$color = $_GET["color"];
$pluralNoun = $_GET["pluralNoun"];
$celebrity = $_GET["celebrity"];
echo "Les roses sont $color <br>";
echo "$pluralNoun are blue <br>";
echo "I love $celebrity <br>";
?>
</main>
<footer>
	<p>Cours PHP - Girafe academy</p>
</footer>
</body>
</html>
