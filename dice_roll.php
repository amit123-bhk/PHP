<?php
function dic_roll(){
    return rand(1,6);
}


$p1w = 0;
$p2w = 0;

$round = 5;

for($i=0;$i<=$round;$i++){

    $py1 = dic_roll();
    $py2 = dic_roll();
    
    echo "Player 1 rolled: $py1"."<br>";
    echo "Player 2 rolled: $py2"."<br>";
    if ($py1 > $py2) {
        echo "Player 1 wins!\n";
        $p1w++;
        echo"<br>";
    } elseif ($py1 < $py2) {
        echo "Player 2 wins!\n";
        $p2w++;
        echo"<br>";
    } else {
        echo "It's a tie!\n";
        echo "<br>";
    }
    echo"<br>";
}

echo"<br>";
echo"<br>";

echo"Number of time Player 1 wins: $p1w"."<br>";
echo"Number of time Player 2 wins: $p2w"."<br>";
echo"<br>";
echo"<br>";

if($p1w > $p2w){
    echo"Player 1 is winner <br>";
}
else if($p1w < $p2w){
    echo"Player 1 is winner <br>";

}
else{
    echo "its ite!!";
}

echo"<br>";
echo"<br>";
echo"<hr>";


?>
