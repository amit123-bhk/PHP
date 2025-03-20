
<?php
// Define the questions and answers
$questions = [
    "What is the largest ocean on Earth?" => ["A) Atlantic Ocean", "B) Indian Ocean", "C) Arctic Ocean", "D) Pacific Ocean"],
    "Which planet is known as the Red Planet?" => ["A) Venus", "B) Mars", "C) Jupiter", "D) Saturn"],
    "What is the capital of Japan?" => ["A) Beijing", "B) Seoul", "C) Tokyo", "D) Bangkok"],
    "Which gas do plants absorb during photosynthesis?" => ["A) Oxygen", "B) Nitrogen", "C) Carbon Dioxide", "D) Hydrogen"]
];

// Store correct answers
$correctAnswers = ["D", "B", "C", "C"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Quiz</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="main">
    <h2>Simple PHP Quiz</h2>
    <form method="POST" action="process.php">
        <?php 
        $index = 0;
        foreach ($questions as $question => $options) { 
            echo "<p>$question</p>";
            foreach ($options as $key => $option) {
                $optionLetter = chr(65 + $key); // Convert 0=A, 1=B, 2=C, etc.
                echo "<input type='radio' name='answers[$index]' value='$optionLetter' required> $option<br>";
            }
            $index++;
        }
        ?>
        <br>
        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>
