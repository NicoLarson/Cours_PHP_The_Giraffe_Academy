<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title></title>
</head>
<body>
<?php
class Book{
	var $title;
	var $author;
	var $pages;

	function __construct($name,$writer,$aPage){
		$this->title=$name;
		$this->author=$writer;
		$this->pages=$aPage;
		echo "$name was added in you library.<br>";
	}
}

$book1 = new Book("Harry Pother","Rowling",400);

$book2 = new Book("Clean Code","Uncle Bob",300);

?>	
</body>
</html>
