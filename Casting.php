<?php
$a = 5;
$b = 5.26;
$c = "hello";
$d = true;
$e = NULL;

// casting;
$a = (string)$a;
$b = (string)$b;
$c = (string)$c;
$d = (string)$d;
$e = (string)$e;

// output;

echo"<hr>";

// echo var_dump($a);
// echo var_dump($b);
// echo var_dump($c);
// echo var_dump($d);
// echo var_dump($e);

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

echo "<br>";

echo "Output after casting"."<br>";

echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";
echo $e."<br>";