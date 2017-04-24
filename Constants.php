<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
// 語法:define(name, value, case-insensitive)
echo "Create a PHP Constant<br>";
define("Hello", "哈囉,Panda,很高興見到你。");
echo Hello;	
echo "<hr>";
?>
<?php
// 常量是全局的，可以在整個腳本中使用。
// 下面的示例使用函數內部的常量，即使它在函數外定義：
echo "Constants are Global<br>";
function myTest() {
    echo Hello;
}
myTest();
echo "<hr>";
?>
</body>
</html>