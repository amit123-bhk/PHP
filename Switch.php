<?php
echo"<h1> Switch case </h1> <br>";
$num = 20;
switch ($num) {
    case 10:
        echo("Number is equel to 10");
        break;
    case 20:
        echo("Number is equal 20");
        break;
    case 30:
        echo("number is equal to 30");
        break;
    default:
        echo("Number is not equal to 10,20,30");
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
?>

<?php
echo"<h1>Char is consanat or vowel</h1> <br>";

$char = "A";
switch($char) {
    case ("A" || "a"):
        echo("It is a vowel");
        break;
    case ("E" || "e"):
        echo("It is a vowel");
        break;
    case ("I" || "i"):
        echo("It is a vowel");
        break;
    case ("O" || "o"):
        echo("It is a vowel");
        break;
    case ("U" || "u"):
        echo("It is a vowel");
        break;
    default:
        echo("It is not a vowel");

}
echo"<br>";
echo"<br>";
echo"<br>";
echo "<hr>";
?>


<?php
echo"<h1>Course</h1> <br>";

$course = "Btech";
switch($char) {
    case ("Btech" || "BTECH"):
        echo("4 years");
        break;
    case ("BCA" || "bca"):
        echo("3 years");
        break;
    case ("BA" || "ba"):
        echo("2 years");
        break;
    case ("MCA" || "mca"):
        echo("2 years");
        break;
    case ("FINE ART" || "fine art"):
        echo("1 years");
        break;
    default:
        echo("Invaild course");

}
echo"<br>";
echo"<br>";
echo"<br>";
echo "<hr>";
?>

<?php
echo "<h1>Nested Switch case:</h1> <br>";

$a = "Amit";
$book = "A1";

switch($a) {
    case ("Amit"|| "AMIT"):
        switch($book) {
            case ("A1"|| "a1"):
                echo("price $500");
                break;
            case ("B1"|| "b1"):
                echo("price $600");
                break;
            case ("C1"|| "c1"):
                echo("price $800");
                break;
            default:
                echo("Invaild book");
        }
        break;
        case ("am"|| "Am"):
            switch($book) {
                case ("e1"|| "E1"):
                    echo("price $1800");
                    break;
                case ("e2"|| "E2"):
                    echo("price $1800");
                    break;
                case ("e3"|| "E3"):
                    echo("price $1800");
                    break;
                default:
                    echo("Invalid book");
            }
            break;
            default:
                echo("Invalid author");
}
?>