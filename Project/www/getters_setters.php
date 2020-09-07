<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Getters & setters</title>
</head>
<body>
	<header>
		<h1>Getters & Setters</h1>
	</header>
<?php
class Movie {
	public $title;
	private $rating;

	function __construct($title,$rating){
		$this->title=$title;
		$this->setRating($rating);
	}
	function getRating(){
		return $this->rating;
	}
	function setRating($rating){
		if($rating=="G"||$rating=="PG"||$rating=="PG-13"||$rating=="R"||$rating=="NR"){
			$this->rating=$rating;
		}else{
			$this->rating="NR";
		}
	}
}
$avengers=new Movie("Avengers","-13");
echo $avengers->getRating();
?>
</body>
</html>
