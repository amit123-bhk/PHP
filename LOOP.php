<?php
echo"<h1>While loop: </h1> <br>";

$i = 1;
while ($i <= 3) {
    $i++;
    echo "The Number is".$i."<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
?>

<?php
echo"<h1>do While loop: </h1> <br>";

$i = 1;
do{
    $i++;

    echo "The Number is".$i."<br>";

}while ($i <= 3);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
?>

<?php
echo "<h1>For Loop: </h1> <br>";

for($i = 1;$i <= 3;$i++){
    echo "The number is". $i ."<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
?>

<?php
echo "<h1>foreach Loop: </h1> <br>";

$superHero = array(
    "name" => "Amit Yadav",
    "email" => "amityadav@gmail.com",
    "age" => 18
);

foreach($superHero as $key => $value){
    echo $key . " : ".$value."<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
?>

<?php
echo "<h1>foreach Loop without key</h1> <br>";

$color = array("red","blue","Green");

foreach($color as $value){
    echo $value ."<br>";
}
?>

<?php
echo "<h1>Your deatials: </h1> <br>";

$you = array(
    "name" => "Amit Yadav",
    "email" => "amityadav123@gamil.com",
    "phone.no" => "7681915652",
    "Section" => "K23DN",
    "collage" => "LPU"

) ;

foreach($you as $key => $value){
    echo $key . " : ".$value."<br>";
}
?>
 