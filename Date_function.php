<?php
echo "<h1> Date</h1> <br>";

$t = date("d");
echo "current date: $t";
echo"<br>";
echo "<hr style: color ='red' >";

?>
<?php
echo "<h1> Date/Day </h1> <br>";

$t = date("D");
echo "current day: $t";
echo"<br>";

echo "<hr style: color ='red'>";
?>
<?php
echo "<h1> Date/year </h1> <br>";

$t = date("Y");
echo "current Year: $t";
echo"<br>";

echo "<hr style: color ='red'>";
?>
<?php
echo "<h1> Date/year </h1> <br>";

$t = date("Year");
echo "current Year: $t";
echo"<br>";

echo "<hr style: color ='red'>";
?>

<?php
echo "<h1 > Hours</h1> <br>";

date_default_timezone_set("Asia/Kolkata");

$t = date("H");
echo "$t";
echo"<br>";
if($t < "20"){
    echo"Have a good day!";
}

echo "<hr style: color ='red'>";
?>

<?php
echo "<h1 style: color ='red'> day with if else</h1> <br>";

// date_default_timezone_set("Asia/Kolkata");

$t = date("D");
echo "$t";
echo"<br>";
if($t =="Thus"){
    echo"Have a good day!";
}else{
    echo "Have a day!";
}


echo "<hr style: color ='red'>";
?>


<?php
echo "<h1> some Question of if else: </h1> <br>";
$d = date("Day");
if($d == "Fri"){
    echo "Have a nice weekend!";
}
elseif($d == "SuN"){
    echo "Have a nice Sunday!";
}
else{
    echo "Have a nice day!";
}
echo "<hr style: color = 'red'>";
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
echo "<h1> Grade and Marks!! </h1> <br>";
$M = 85;

if(100 <= $M && $M>= 90){
    echo"Grade: O";
}
elseif( 90< $M && $M >= 80){
    echo"Grade: A+";
}
elseif( 80< $M && $M >= 70){
    echo"Grade: A";
}
elseif( 70< $M && $M >= 60){
    echo"Grade: B+";
}
elseif( 60< $M && $M >= 50){
    echo"Grade: B";
}
elseif( 50< $M && $M >= 40){
    echo"Grade: C";
}
elseif( 40< $M && $M >= 30){
    echo"Grade: D";
}
elseif( 30< $M && $M >= 0){
    echo"Grade: Fail";
}
else{
    echo "Invaild marks!!";
}

echo "<hr>";

?>

<?php
echo "<h1> nested if/else </h1>";
echo "<br>";

$age = 23;
$n = "Indian";

if($n == "Indian"){
    if($age >= 18){
        echo "Eligible to give Vote.";
    }else{

        echo "Not Eligible to give Vote.";
    }
}

?>

