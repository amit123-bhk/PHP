<?php
echo"<h1>student marks</h1> <br>";
$num = 91;

if ($num <= 100 && $num >= 90) {
    echo "Grade : A";
}
else if ($num <= 89 && $num >=80) {
    echo "Grade : B";
}
else if ($num <= 79 && $num >=70) {
    echo "Grade : C";
}
else if ($num <= 69 && $num >=60) {
    echo "Grade : B";
}
else if ($num < 60){
    echo "Grade: F";
}

echo"<br>";
echo"<br>";
echo"<hr>";
?>

<?php
echo"<h1>Question 2</h1> <br>";

$amount = 5000;

if ($amount >=5000) {
    $dis = (($amount - (20/100)*$amount));
    echo "Discount amount $dis";
}
else if ($amount <=5000 && $amount >= 2000) {
    $dis = (($amount - (10/100)*$amount));
    echo "Discount amount $dis";
}
else{
    echo"No discount";
}
echo"<br>";
echo"<br>";
echo"<hr>";
?>


<?php
echo "<h1> Question no 3</h1> <br>";

$num = 10;

for( $i = 1; $i <= $num; $i++ ){
    $t = ($i * $num);
    echo "$i * $num = ".$t."<br>";
}




echo"<br>";
echo"<br>";
echo"<hr>";
?>

<?php
echo "<h1>Question 4</h1> <br>";

$num = 1;

while($num < 21){
    if($num % 2 != 0){
        echo "$num is a Even number <br>";
        echo"<br>";
    }
    else{
        echo "$num is a odd number <br>";
        echo "<br>";
    }
    $num++;
}

echo "<br>";
echo "<br>";
echo "<hr>";
?>

<?php
echo "<h1>Question 5</h1> <br>";

$pass = "Abc@123";

do {
    if($pass =="Abc@123"){
        echo"password is granterd <br>";
    }
    else{
        echo"password is worng <br>";
    }
}
while($pass != "Abc@123");


echo "<br>";
echo "<br>";
echo "<hr>";
?>



<?php
echo "<h1>Question 5</h1> <br>";

$money = 0;

$input="Adding";
$add= 1000;
$de = 500;
switch($input){
    case "Adding": $money = $money + $add;
    echo"Added money in wallet is $money <br>";
    break;
    
    case "Deduction": $money = $money - $de;
    echo"Deduction money in wallet is $money <br>";
    break;

    default: echo"Invaild";
    break;
}

echo "<br>";
echo "<br>";
echo "<hr>";
?>


<?php
echo "<h1>Question Stock count</h1> <br>";

$count = 0;

$purchaser = 0;

while($purchaser < 100 ){
    $count++;
    echo "Product sell: $count <br>";
    $purchaser++;
}

echo "<br>";
echo "<br>";
echo "<hr>";
?>

<?php
echo "<h1>Question Email</h1> <br>";

$first = "amit";
$last = "yadav";
$it = "59144";
$comm = "@gamil.com";

echo $first.$last.$it.$comm."<br>";

echo "<br>";
echo "<br>";
echo "<hr>";
?>

<?php
echo "<h1>Question Email</h1> <br>";

$p = 5000;
$r = 5/100;
$t = 2;

$si = $p * $r * $t;

echo "Simple interest is $si <br>";


echo "<br>";
echo "<br>";
echo "<hr>";
?>


<?php
echo "<h1>Question Swap</h1> <br>";

$a = 5;
$b = 10;
echo"Numbers after swapping a is $a and b is $b <br>";
echo"<br>";
echo"<br>";
echo"<br>";

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo"Numbers after swapping a is $a and b is $b <br>";




echo "<br>";
echo "<br>";
echo "<hr>";
?>


<?php
echo "<h1>Question salary bouns</h1> <br>";

$salary = 55000;

if( $salary > 50000) {
    $as =$salary + ((10/100)*$salary);
    echo"Salary after bonus is ".$as."<br>";
    
}
else{
    $as = $salary + ((10/100)*$salary);
    echo"Salary after bonus is ".$as."<br>";

}

echo "<br>";
echo "<br>";
echo "<hr>";
?>

<?php
echo "<h1>Question website</h1> <br>";

$item1 = 10000;
$item2 = 50020;
$item3 = 3020;

$ts = $item1 + $item2 + $item3;

echo"Total cost = $ts <br>";




echo "<br>";
echo "<br>";
echo "<hr>";
?>

<?php
echo "<h1>Question for eachloop</h1> <br>";


$c = array(12300,6000,7820,850,11250);
$l = count($c);


$t = 0;
foreach($c as $v) {
    $t = $t + $v;
}
echo "total amount: ".$t."<br>";




echo "<br>";
echo "<br>";
echo "<hr>";
?>

