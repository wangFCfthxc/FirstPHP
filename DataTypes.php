<?php 
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>"; 
echo $y;
echo "<hr>";
?>
<?php 
$x = 5985;
var_dump($x);
echo "<br>";
?>
<?php 
$x = 10.365;
var_dump($x);
?>
<?php
print "<br>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>
<?php
echo "<hr>";
echo "(object)<br>";
class Car {
    function Car() {
        $this->model = "VW";
    }
}
// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>
<?php
echo "<hr>";
echo "(NULL Value)<br>";
$x = "Hello world!";
$x = null;
var_dump($x);
?>