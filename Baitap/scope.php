<html>
<head>
<title> ::welcome to php </title>
</head>
<body>
<h4> scope of variable </h4>
<?php 
    $a=100;
/*global scope */
function test(){
 	$i =10;
	$a=10;
	echo"<br>a:=$a";
	echo"<br>i: =$i";
}
test();
echo "<br>a: =$a";
 $i=1000;
echo"<br>i:=$i";
?>
</body>
</html>