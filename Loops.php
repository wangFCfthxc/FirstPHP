<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php  
$x = 1;
 
while($x <= 6) {
  echo "The number is: $x <br>";
  $x++;
} 
echo "<hr>";
?> 
<?php
$x=6;
do {
	echo "The number is: $x <br>";
	$x++;
} while ($x <= 5);
echo "<hr>";
?>
<?php  
for ($x = 0; $x <= 20; $x++) {
	if($x%2 != 0){
		echo "The number is: $x <br>";
	}
}
?>  
</body>
</html>