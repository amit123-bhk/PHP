<?php
$x=$y=$z = "letters";

echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo $z;
echo "<br>";
?>

<?php
$x = 5985;
var_dump(is_int($x));
echo "<br>";

$x = 59.85;
var_dump(is_int($x));
echo "<br>";

?>

<?php

$a = 5;
$b = 5.34;
$c = "25 kilometers";
$d = "kilometer 25";
$e = "Hello";
$f = true;
$g = NULL;

echo "casting into int <br>";
$a = (int)$a;
$b = (int)$b;
$c = (int)$c;
$d = (int)$d;
$e = (int)$e;
$f = (int)$f;
$g = (int)$g;

// output
echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";
echo $e."<br>";
echo $f."<br>";
echo $g."<br>";

echo "casting into float <br>";
$a = (float)$a;
$b = (float)$b;
$c = (float)$c;
$d = (float)$d;
$e = (float)$e;
$f = (float)$f;
$g = (float)$g;

// output
echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";
echo $e."<br>";
echo $f."<br>";
echo $g."<br>";


?>
<?php
$a = 5;
$b = 5.34;
$c = 0;
$d = -1;
$e = 0.1;
$f = "hello";
$g = "";
$h = true;
$i = null;

echo "casting into boolean <br>";
$a = (bool)$a;
$b = (bool)$b;
$c = (bool)$c;
$d = (bool)$d;
$e = (bool)$e;
$f = (bool)$f;
$g = (bool)$g;
$h = (bool)$h;
$i = (bool)$i;

// output
echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";
echo $e."<br>";
echo $f."<br>";
echo $g."<br>";
echo $h."<br>";
echo $i."<br>";

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($g);
echo "<br>";
var_dump($h);
echo "<br>";
var_dump($i);
echo "<br>";
?>