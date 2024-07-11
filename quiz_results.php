<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/styles.css">
<link rel="stylesheet" href="styles/quiz.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quiz Results</title>
</head>
<body>

<h2>Quiz Results</h2>

<?php
// Define the correct answers array
$correctAnswers = array(
    "q1" => "a",
    "q2" => "a",
    "q3" => "b",
    "q4" => "b"
);

// Initialize variables to count correct answers
$correctCount = 0;
$totalQuestions = count($correctAnswers);

// Check each answer submitted via POST method
foreach ($correctAnswers as $question => $correctOption) {
    if (isset($_POST[$question]) && $_POST[$question] === $correctOption) {
        $correctCount++;
    }
}

// Calculate percentage of correct answers
$percentage = ($correctCount / $totalQuestions) * 100;

// Output results
echo "<p>You answered $correctCount out of $totalQuestions questions correctly.</p>";
echo "<p>Your score: " . round($percentage, 2) . "%</p>";
?>

<p><a href="quiz.html">Try Again?</a></p>

</body>
</html>
