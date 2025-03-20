<?php
// Define correct answers
$correctAnswers = ["D", "B", "C", "C"];

// Function to calculate the score
function calculateScore($userAnswers, $correctAnswers) {
    $score = 0;
    foreach ($correctAnswers as $index => $correctAnswer) {
        if (isset($userAnswers[$index]) && $userAnswers[$index] === $correctAnswer) {
            $score++;
        }
    }
    return $score;
}

// Get user answers
$userAnswers = isset($_POST['answers']) ? $_POST['answers'] : [];

// Calculate score
$totalQuestions = count($correctAnswers);
$score = calculateScore($userAnswers, $correctAnswers);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
    <link rel="stylesheet" href="index.css">
</head>
<body class="body-p">
    <h2>Quiz Result</h2>
    <p>Your Score: <?php echo $score; ?> / <?php echo $totalQuestions; ?></p>
    <a href="index.php">Try Again</a>
</body>
</html>
