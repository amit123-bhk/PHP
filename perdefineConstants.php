<?php
echo "The current Line number is ".__LINE__."."."<br>";
echo "Why are ".__FILE__."."."<br>";
echo "Directory of the Current PHP script name is ".__DIR__."."."<br>";
function hello(){
    $x = "Hello World";
    echo "$x. The function name is ".__FUNCTION__."."."<br>";
}
hello();
?>