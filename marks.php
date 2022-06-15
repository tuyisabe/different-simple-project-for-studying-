<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MARKS</title>

</head>
<body>
<form method="POST">
	NAMES<input type="text" name="names" placeholder="NAMES">
	JAVA<input type="number" name="java" placeholder="Marks">
	PYTHON<input type="number" name="python" placeholder="Marks">
	C PROGR<input type="number" name="c" placeholder="Marks">
	WEB<input type="number" name="web" placeholder="Marks">
	DATABASE<input type="number" name="database" placeholder="Marks">
	<input type="submit" name="submit" value="Check">
</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$names = $_POST['names'];
	$java = $_POST['java'];
	$python = $_POST['python'];
	$c = $_POST['c'];
	$web = $_POST['web'];
	$database = $_POST['database'];
	$total = $java + $python + $c + $web + $database;
	$percentage = ($total * 100)/250;

	if ($percentage>=90 AND $percentage<=100) {
		echo"NAMES:".$names."<br>";
		echo"MARKS:".$total."<br>";
		echo"PERCENTAGE:".$percentage."%<br>";
		echo"GRADE:  A<br>";
	}
elseif($percentage>=80 && $percentage<=90){
		echo"NAMES:".$names."<br>";
		echo"MARKS:".$total."<br>";
		echo"PERCENTAGE:".$percentage."%<br>";
		echo"GRADE:  B<br>";
}

	else{
		echo "PERCENTAGE MUST BE BETWEEN 0% AND 100%!!!!";
	}

}

?>