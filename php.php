<?php
$x= 5;
$y= 10;

function myTest () {
    $x = 25;
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    echo $x;
}

myTest();
echo $y;
?>

<?php

function test () {
    static $a = 0;
    echo $a;
    $a++;
}

test();
test();
test();
?>

<?php
echo "<h2>Olá mundo!</h2>";
echo "Como você está?<br>";
echo "Esta ", "string ", "foi ", "feita ", "por muitos parentêses!"

?>

<?php
$txt1 = "Olá mundo!";
$txt2 = "está?";
$x = 2;
$y = 3;
echo "<h2>" .$txt1. "</h2>";
echo "Como você $txt2<br>";
echo $x + $y;
?>

<?php
print "<h2>Hello World!</h2>";
print "PHP is fun<br>";
?>

<?php
$txt1 = "Olá mundo!";
$txt2 = "está?";
$x = 2;
$y = 3;
print "<h2>" .$txt1. "</h2>";
print "Como você $txt2<br>";
print $x + $y;
print "<br><hr>";
?>


<?php
$x = 5;
var_dump ($x);
echo "<br><hr>";
?>


<?php
$cars = array("Fox", "Gol", "Opala");
var_dump($cars);
echo "<hr>";
?>

<?php
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is " .$this->color . " " .$this->model . "!";
    }
}

$myCar = new Car ("Black", "Opala");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("White", "Fox");
echo $myCar -> message();
echo "<br><hr>";
?>

<?php
$x = 2;
$y = null;
var_dump($x, $y);
echo "<br><hr>";
?>

<?php
echo strlen("Hello World!");
echo "<br><hr>";    
?>

<?php
echo str_word_count("Hello World!");
echo "<br><hr>";
?>

<?php 
echo strrev("Hello Word!");
echo "<br><hr>";
?>

<?php
echo strpos ("Hellow World!", "World");
echo "<br><hr>";
?>

<?php
echo str_replace("World", "Dolly", "Hello World!");
echo "<br><hr>";
?>

<?php
$x = 5265;
$y = 52.65;
var_dump(is_int($x));
var_dump(is_int($y));
echo "<br><hr>";
?>

<?php
//Float para inteiro
$x = 66515.95;
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";

//String para inteiro
$x = "26565.98";
$int_cast = (int)$x;
echo $int_cast;
echo "<br><hr>";
?>

<?php
echo (min(0, 10, 300, -200));
echo "<br>";
echo (max(0, 10, 300, -200));
echo "<br><hr>";
?>

<?php
define("Cars", ["Volvo", "Fox", "Opala"]);
echo Cars[0];  
echo "<br><hr>"; 
?>

<?php
define("OLA", "Bem-vindo ao meu site!");
echo OLA;
echo "<br><hr>";
?>