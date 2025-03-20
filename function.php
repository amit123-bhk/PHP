<?php
function name(){
    echo"Greeting for the day!!!";
}
name();
echo"<br>";
echo"<br>";
echo"<hr>";
function name1($name,$roll_no){
    echo"Hello, my name is $name <br>";
    echo"And my Roll no is: $roll_no <br>";
}
name1("Amit",19);
echo"<br>";
echo"<br>";
echo"<hr>";

function name2($name = "Amit",$roll_no = 13){
    echo"Hello, my name is $name <br>";
    echo"And my Roll no is: $roll_no <br>";
}
name2();
echo"<br>";
echo"<br>";
echo"<hr>";

function name3($name,$roll_no){
    echo"And my Roll no is: $roll_no <br>";
    return $name;
}
echo name3("Amit",19);
echo"<br>";
echo"<br>";
echo"<hr>";

function name4($name ,$roll_no){
    echo"And my Roll no is: $roll_no <br>";
    return $name;
   
}
echo name4(13,"amit");
echo"<br>";
echo"<br>";
echo"<hr>";
function name6($a ,$b){
    return $a + $b;
    
}
echo "Addition : ".name6(56,76);
echo"<br>";
echo"<br>";
echo"<hr>";
function name5($a ,$b){
    return $a - $b;
   
}
echo "Sub : ".name5(89,79);
echo"<br>";
echo"<br>";
echo"<hr>";

echo"<h1>call by value and call by refrence</h1><br>";

function cbv(&$a,&$b){
    echo"Addtion of a and b is:".$a + $b."<br>";
}
$a = 5;
$b = 25;
echo "".cbv($a,$b);

echo"<br>";
echo"<br>";

function cbr($a,$b){
    echo"Addtion of a and b is:".$a + $b."<br>";
}
$a = 5;
$b = 25;
echo "".cbr($a,$b);

echo"<br>";
echo"<br>";
echo"<hr>";

$gVar = "Hello, World!";

function dG() {
    global $gVar;
    echo " global variable is:- ".$gVar."<br>";
}

dG();

function sV($a,$b){
    static $sk =0;
    $sk = $a++;
    $b++;
    echo"static v: ".$sk."non- static: ".$b."<br>";
}

sV(4,6);
sV(4,6);
sV(4,6);
sV(4,6);
sV(4,6);
sV(4,6);
sV(4,6);
sV(4,6);


echo"<br>";
echo"<br>";
echo"<hr>";
?>