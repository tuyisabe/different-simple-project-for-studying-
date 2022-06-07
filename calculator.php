<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>calculator</title>
	<style type="text/css">
		form{
			position: relative;
			width: 500px;
			height: 400px;
			margin-left: 400px;
			margin-top: 100px;
			background-color: greenyellow;

		}
		input[type=number]{
			font-size: 20px;
			margin: 30px;
			width: 450px;
			padding-top: 15px;
			padding-bottom: 15px;
			border-radius: 12px;

		}
		input[type=submit]{
			border-radius: 12px;
			padding:5px 20px;
			background-color: green;
			margin-left: 100px;

		}
			select{
			font-size: 20px;
			margin: 30px;
			padding-top: 15px;
			padding-bottom: 15px;
			border-radius: 12px;

		}
		.res{
			font-size: 60px;
			color: red;
			margin-top: -480px;
			margin-left: 450px;
		}
	</style>
</head>
<body>
<form method="POST" action="">
	<input type="number" name="fn" placeholder="First number">
	<input type="number" name="ln" placeholder="Last number">
	
	<select name="operation">
		<option value="">~~select~~</option>
		<option value="add">+</option>
		<option value="substraction">-</option>
		<option value="division">/</option>
		<option value="multiplication">*</option>
	</select><br>
	<input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_POST['submit'])){
	$fn = $_POST['fn'];
	$ln =$_POST['ln'];
	$operation = $_POST['operation'];
if ($fn>=0 && $ln>=0) {

	switch ($operation) {
		case 'add':
			$result = $fn + $ln;
			echo "<div class='res'> Result is:". $result."</div>";
			break;
		case 'substraction':
			$result = $fn - $ln;
			echo "Result is:". $result;
			break;
		case 'multiplication':
			$result = $fn * $ln;
			echo "Result is:". $result;
			break;
		case 'division':
			$result = $fn / $ln;
			echo "Result is:". $result;
			break;
		default:
			echo"Invalit Select existing Operation!!!";
			break;
	}
}
else{
	echo"Nenagative number are not allowed!!";
}
}
?>
</body>
</html>
