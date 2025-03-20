<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    echo "<h2>Revied Data</h2>";
    echo"Name is : $name <br>";
    echo"email is : $email";

}
else{
    echo"Invalid request";
}
?>