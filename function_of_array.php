<?php
// array_merge():
echo"<h1>Array mearge</h1><br>";

$a1 = array("a"=>"red","b"=>"green");
$a2 = array("c"=>"blue","b"=>"yellow");
$a3 = array("c"=> "orange","b"=> "natural");
print_r(array_merge($a1,$a2,$a3));
echo"<br>";
echo"<br>";
?>

<?php
// array_merge:
echo"<h1>Array merge ass. array</h1><br>";

$a1 = array("red","green","blue");
$a2 = array("blue","yellow");
echo"<br>";
print_r(array_merge($a1,$a2));
echo"<br>";
echo"<br>";
echo"<br>";
echo"<hr>";
?>

<?php
echo"<h1>array_pop() ass. array</h1><br>";
// array_push() && array_pop():-

$a2 = array("red","green","blue");
array_pop($a2);
print_r($a2);
echo"<br>";



?>
<?php
// array_push() && array_pop():-
$a1 = array("a"=>"red","b"=>"green","c"=>"blue");
array_pop($a1);
print_r($a1);

echo"<br>";
echo"<br>";
echo"<hr>";

?>

<?php
echo"<h1>array_push() ass. array</h1><br>";
// array_push() && array_pop():-

$a1 = array("red","green","blue");
array_push($a1,"yellow");
print_r($a1);
echo"<br>";


$a1 = array("a"=>"red","b"=>"green","c"=>"blue");
array_push($a1,"yellow");
print_r($a1);

echo"<br>";
echo"<br>";
echo"<hr>";
?>

<?php
echo"<h1>array_reverse()</h1><br>";
// array_reverse()

$a1 = array("red","green","blue");
echo"<br>";
print_r(array_reverse($a1,true)); //with this element will reverse with its index
echo"<br>";
print_r(array_reverse($a1)); //only element will reverse
echo"<br>";


$a1 = array("a"=>"red","b"=>"green","c"=>"blue");
print_r(array_reverse($a1));

echo"<br>";
echo"<br>";
echo"<hr>";
?>

<?php
echo"<h1>array_search()</h1><br>";
// syntax:- array_search(value,array);

$a = array("a"=>"red","b"=>"green","c"=>"blue");
print_r(array_search("red",$a)."<br>");  //it will return the key of element/value;
echo array_search("red",$a)."<br>"; //it will return the key of element/value;
echo"<br>";
echo"<br>";

$a = array("a"=>"1","b"=>1,"c"=>"1");
echo"<br>";
echo array_search(1,$a,true); //by using true it will give the key when the condition is true;
echo "<br>";
echo array_search(1,$a);
echo "<br>";
echo "<br>";

$a1 = array("red","green","blue");
echo array_search("red",$a1);

echo"<br>";
echo"<br>";
echo"<hr>";
?>


<?php
echo"<h1>array_slice()</h1><br>";
// syntax:- array_slice(array,strat,length);

$a = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
print_r(array_slice($a,0,3));
echo "<br>"; //it will print the element b/w given index and the index is included
echo "<br>";

$a1 = array("red","green","blue","yellow","purple","brown");
echo"<br>";
print_r(array_slice($a1,0,length: 3));
echo "<br>";
print_r(array_slice($a1, 1, 3,true)); //OVER here true is preserving the index:


echo"<br>";
echo"<br>";
echo"<hr>";
?>

<?php
echo"<h1>array_cloumn()</h1><br>";
// syntax:- array_cloumn(array,"key1","key2",'key3");

$result = array(
    array("name"=>"amit","cgpa"=>"7.5","status"=>"pass"),
    array("name"=>"ait","cgpa"=>"7.9","status"=>"pass"),
    array("name"=>"tima","cgpa"=>"2.5","status"=>"fail")

);

$name = array_column($result,"name");
print_r($name);
echo"<br>";
echo "<br>";

$result = array(
    array("name"=>"amit","cgpa"=>"7.5","status"=>"pass"),
    array("name"=>"ait","cgpa"=>"7.9","status"=>"pass"),
    array("name"=>"tima","cgpa"=>"2.5","status"=>"fail")

);

$name = array_column($result,"name","status");
echo "<br>";

print_r($name);
echo "<br>";
echo "<br>";
$cgpa = array_column($result,"cgpa");
echo "<br>";
print_r($cgpa);

echo"<br>";
echo"<br>";
echo"<hr>";
?>