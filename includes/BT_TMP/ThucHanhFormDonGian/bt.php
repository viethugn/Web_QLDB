<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Hello</title>
</head>
<body>
	<?php
	$a = rand(1, 4);
	$b = rand(10, 100);
	define('PI', 3.14);
	echo "a = " . $a;
	echo "<br>";
	echo "b = " . $b;
	echo "<br>";
	switch ($a) {
		case 1:
			echo "chu vi hình vuông cạnh $b: " . $b*4;echo "<br>";
			echo "diện dích hình vuông cạnh $b: " . pow($b, 2);
			break;
		case 2:
			echo "chu vi hình tròn bán kính $b: " . 2*PI*$b;echo "<br>";
			echo "diện dích hình tròn bán kính $b: " . PI*pow($b, 2);
			break;
		case 3:
			echo "chu vi hình tam giác đều cạnh $b: " . $b*3;echo "<br>";
			echo "diện dích hình tam giác đều cạnh $b: " . round(($b*($b*sqrt(3)/2))/2, 2) ;
			break;
		case 4:
			echo "chu vi hình chữ nhật: " . ($a+$b)*2;echo "<br>";
			echo "diện dích hình chữ nhật: " . $a*$b;
			break;	
	}
	?>
	<br><br>
	<?php
	include('../../backindex.html');
	?>
</body>