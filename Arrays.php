<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
$cars = array (
		"Volvo",
		"Honda",
		"Toyota" 
);
echo "I like " . $cars [0] . ", " . $cars [1] . " and " . $cars [2] . ".";
echo "<hr />";
?>
<?php

echo count ( $cars );
echo "<hr />"?>
<?php

$arrlength = count ( $cars );
for($x = 0; $x < $arrlength; $x ++) {
	echo $cars [$x];
	echo "<br>";
}
echo "<hr />";
?>
<?php

$age = array (
		"Peter" => "35",
		"Ben" => "37",
		"Joe" => "43" 
);
echo "Peter is " . $age ['Peter'] . " years old.";
echo "<hr />";
?>
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<hr />";
?>
<?php
$str = array("D", "A", "Z", "H", "B");
sort($str);

$clength = count($str);
for($x = 0; $x < $clength; $x++) {
    echo $str[$x];
    echo "<br>";
}
echo "<hr />";
?>
<?php
rsort($str);

$clength = count($str);
for($x = 0; $x < $clength; $x++) {
    echo $str[$x];
    echo "<br>";
}
echo "<hr />";
?>
<?php
// according to the value ascending
asort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<hr />";
?>
<?php
// according to the key ascending
ksort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<hr />";
?>
<?php
// according to the value descending
arsort($age);

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<hr />";
?>
<?php
// according to the key descending
krsort($age);

foreach($age as $x => $x_value) {
	echo "Key=" . $x . ", Value=" . $x_value;
	echo "<br>";
}
echo "<hr />";
?>
</body>
</html>