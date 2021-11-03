
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

<?php
$x = 10;
$y = 2;
if ($x+$y = 12) {
    echo "A soma é igual a 12.";
    echo "<br><hr>";
}
?>


<?php
$x = 0;
while ($x <= 5) {
    echo "O número é: $x <br>";
    $x++;
}
echo "<hr>";
?>

<?php
for ($x=0; $x<5; $x++) {
    if ($x == 4) {
        break;
    }
    echo "O número é: $x <br>";
}
echo "<hr>";
?>

<?php
for ($x=0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "O número é: $x <br>";
}
echo "Não vai aparecer o número 4. <br><hr>";
?>

<?php
function msgEscrita () {
    echo "Olá, mundo!";
}

msgEscrita();
echo "<br><hr>";
?>

<?php
function familyName($fname) {
    echo "$fname Barbosa <br>";
}
familyName("Lucas");
familyName("Renata");
familyName("Maria das Graças");
echo "<hr>";
?>

<?php
function nameAge ($fname, $age) {
    echo "$fname tem $age anos. <br>";
}
nameAge("Lucas", "19");
nameAge("Renata", "49");
nameAge("Maria das Graças", "63");
echo "<hr>";
?>

<?php
function setHeight(int $minheight = 50) {
    echo "A altura é: $minheight <br>";
}
setHeight(350);
setHeight(100);
setHeight(); //Vai aparecer 50, pois foi defindo como padrão.
setHeight(893);
echo "<hr>";
?>

<?php
function soma ($x, $y) {
    $z = $x + $y;
    return $z;
}
echo "5 + 10 = " .soma(5, 10). "<br>";
echo "6 + 52 = " .soma(6, 52). "<br>";
echo "<hr>"
?>

<?php
function add_five (&$valor) {
    $valor += 5;
}
$num = 2;
add_five($num);
echo "$num <br><hr>";
?>

<?php
$cars = array("Volvo", "BWM", "Toyota");
echo count($cars);
echo "<hr>";
?>

<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlegnth = count($cars); //Conta quantos carros tem
for ($x = 0; $x < $arrlegnth; $x++) {
    echo $cars[$x], "<br>";
}   
echo "<hr>";
?>

<?php
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo "Novo!!!<br>";
echo preg_match($pattern, $str);
echo "<br><hr>";
?>


<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
echo "<br><hr>";
?>

<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools
echo "<br><hr>";
?>

<?php
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str);
echo "<br><hr>";
?>

<?php
echo "Hoje é: ", date("d-m-Y"), "<br>";
echo "Hoje é: ", date("d/m/Y"), "<br>";
echo "Hoje é: ", date("d.m.Y"), "<br>";
echo "A data de hoje é: ", date("l"), "<br><hr>";
?>