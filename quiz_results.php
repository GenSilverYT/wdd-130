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

<?php
// Correct answers
$answers = array(
    'q1' => 'a',
    'q2' => 'a',
    'q3' => 'a',
    'q4' => 'a'
);

// Submitted answers
$submitted_answers = array(
    'q1' => isset($_POST['q1']) ? $_POST['q1'] : '',
    'q2' => isset($_POST['q2']) ? $_POST['q2'] : '',
    'q3' => isset($_POST['q3']) ? $_POST['q3'] : '',
    'q4' => isset($_POST['q4']) ? $_POST['q4'] : ''
);

// Calculate total questions and correct answers
$total_questions = count($answers);
$correct_answers = 0;

// Check answers
foreach ($answers as $question => $correct_answer) {
    if (isset($submitted_answers[$question]) && $submitted_answers[$question] === $correct_answer) {
        $correct_answers++;
    }
}

// Calculate percentage
$percentage = ($correct_answers / $total_questions) * 100;

// Prepare pop-up message
$popup_message = "<script>";
$popup_message .= "alert('Quiz Results:\\n";
$popup_message .= "Total Questions: $total_questions\\n";
$popup_message .= "Correct Answers: $correct_answers\\n";
$popup_message .= 'Percentage: ' . number_format($percentage, 2) . '%\\n';
$popup_message .= "');";
$popup_message .= "window.location.href = 'index.html';";
$popup_message .= "</script>";

// Output pop-up message
echo $popup_message;
?>
