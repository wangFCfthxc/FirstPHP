<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
/*
function functionName() {
    code to be executed;
}
functionname不能數字開頭.不區分大小寫
 */

function writeMsg() {
    echo "Hello world!";
}
WRITEMSG(); // call the function
echo "<hr>";
?> 
<?php
// function(變數)
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
echo "<hr>";
?>
<?php
// function(變數, 變數)
function familyName2($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

familyName2("Hege", "1975");
familyName2("Stale", "1978");
familyName2("Kai Jim", "1983");
echo "<hr>";
?>
<?php
// 使用預設變數
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350); // not use default value
setHeight(); // will use the default value of 50
setHeight(135); // not use default value
setHeight(80); // not use default value
echo "<hr>";
?>
<?php
// function() 返回一個值
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
echo "<hr>";
?>
</body>
</html>