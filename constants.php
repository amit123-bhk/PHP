<?php
// define("CONSTANT_NAME", "value");
define("WISHES","Good Moring");
echo WISHES."<br>";

echo constant("WISHES");
echo "<hr>";
?>


<?php 
define("courses",["PHP","HTML","CSS"]);
ECHO courses[0]."<br>";
ECHO courses[1]."<br>";
ECHO courses[2]."<br>";
echo "<hr>";
?>

<?php
const W = array("PHP","HTML","CSS");
ECHO W[0]."<br>";
ECHO W[1]."<br>";
ECHO W[2]."<br>";
echo "<hr>";
?>