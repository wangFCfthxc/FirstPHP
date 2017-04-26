<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
$t = date("H");

if ($t < "22") {
    echo "Have a good day!";
}
echo "<hr>";
?>
<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<hr>";
?>
<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good day!";
} elseif ($t > "20") {
    echo "Have a good night!";
} else {
    echo "Have a good morning!";
}
echo "<hr>";
?>
</body>
</html>