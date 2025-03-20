<?php
echo"<h1>Break in loop: </h1> <br>";

for($i = 1; $i <= 3; $i++){
    for($j = 1; $j <= 5; $j++){
        if($i == $j){
            break;
        }
        echo "i = ".$i."j =".$j."<br>";
        echo"<br>";

    }

}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
?>

<?php
echo"<h1>Break in loop using array: </h1> <br>";

$c = array("red","blue","Green","Yellow","purple");
$l = count($c);
for($i = 0;$i <= $l; $i++){
    for( $j= 1; $j <= $l; $j++){
        if($c[$i] ==$c[$j]){
            break;
        }
        echo "i = ".$c[$i]."<br>";
    }
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
?>