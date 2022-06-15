<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table{
			position: relative;
		}
		.white{
			width: 100px;
			height: 40px;
			background-color: white;
		}
		.black{
			width: 100px;
			height: 50px;
			background-color: black;
		}
	</style>
</head>
<body>
<table border="1">
<?php
for ($i=0; $i <=8; $i++) { 
	echo"<tr>";
	for ($j=0; $j <=$i ; $j++) { 
		echo"*  ";
	}
	echo"<br>";
}

for($a=1;$a<=10;$a++){
	echo"<tr>";
	for($b=1;$b<=10;$b++){
		$sum = $a+$b;
		if ($sum%2==0) {
			echo "<td class='black'></td>";
		}
		else{
			echo "<td class='white'></td>";
		}
	}
	echo "</tr>";
}

?>
</table>
</body>
</html>