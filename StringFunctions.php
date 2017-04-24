<?php
echo "Get The Length of a String<br>";
echo strlen("Hello world!"); // outputs 12
echo "<hr>";
?>
<?php
echo "Count The Number of Words in a String<br>";
echo str_word_count("Hello world!"); // outputs 2
echo "<hr>";
?>
<?php
echo "Reverse a String<br>";
echo strrev("Hello world!"); // outputs 2
echo "<hr>";
?>
<?php
// 如果找到匹配項，則該函數返回第一個匹配的字符位置。 如果沒有找到匹配項，則返回FALSE。
// 提示：字符串中的第一個字符位置為0（不是1）。
echo "Search For a Specific Text Within a String<br>";
echo strpos("Hello world!", "world"); // outputs 6
echo "<hr>";
?>
<?php
/*
PHP str_replace（）函數將一些字符替換為字符串中的一些其他字符。
以下示例將“world”替換為“Panda”文本：
 */
echo "Replace Text Within a String<br>";
echo str_replace("world", "Panda", "Hello world!");
echo "<hr>";
?> 