<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<h1>Arithmetic Operators</h1>
<?php
    $x = 10;
    $y = 10;
    echo "add: ";
    echo $x + $y;
    echo "<br>";
    echo "Min: ";
    echo $x - $y;
    echo "<br>";
    echo "Mul: ";
    echo $x * $y;
    echo "<br>";
    echo "Div: ";
    echo $x / $y;
    echo "<br>";
    echo "rem: ";
    echo $x % $y;
    echo "<br>";
    echo "exp: ";
    echo $x ** $y;
    echo "<br>";
    echo "<hr>";
    echo "<hr>";
    
    echo "<h1> Assigment </h1> <br>";
    
    echo "= : ";
    
    echo $x = $y;
    echo "<br>";
    
    echo "+= : ";
    echo $x += $y;
    echo "<br>";
    
    echo "-= : ";
    echo $x -= $y;
    echo "<br>";
    
    echo "*= : ";
    echo $x = $y;
    echo "<br>";
    
    echo "/= : ";
    echo $x = $y;
    echo "<br>";
    
    echo "%= : ";
    echo $x = $y;
    echo "<br>";
    echo "<hr>";
    echo "<hr>";
    
?>
<?php
echo "<h1> Comparison </h1> <br>";
$x = 25;
$y = 35;
$z = "25";

var_dump($x == $z);
echo "<br>";
var_dump($x === $z);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $z);
echo "<br>";
var_dump($x < $y);
echo "<br>";
var_dump($x > $y);
echo "<br>";
var_dump($x <= $y);
echo "<br>";
var_dump($x >= $y);
echo "<br>";
echo "<hr>";
echo "<hr>";
?>

<?php
echo "<h1> Increment and Decrementing </h1> <br>";
$x = 10;
echo "++x post : ",++$x ,"<br>";
echo  "x++ post : ",$x++ ,"<br>";
echo  "--x post : ", --$x ,"<br>";
echo  "x-- post : ",$x-- ,"<br>";
echo "<hr>";
echo "<hr>";

?>

<?php
echo "<h1> String Operators </h1> <br>";
$x = "Hello";
$y = "World";

echo $x.$y;
echo "<br>";
$x.=$y;
echo $x;
echo "<hr>";
echo "<hr>";
?>

<?php
echo "<h1> Ternary </h1> <br>";
echo $s = (empty($user)) ?"Anonymous": $user;
echo "<br>";

$us = "Micheal";
echo $st = $us??'anonymous';
echo '<hr>';
echo '<hr>';
?>

<?php
echo "<h1> Logical Operators </h1> <br>";
$y = 2024;
if(($y % 400 == 0)||(($y%4==0)&&($y%100 != 0))){
    echo "$y is a leap Year";
}
else{
    echo "$y is not a leap year.";
}
echo "<hr>";
echo "<hr>";
?>
</html>