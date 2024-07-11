<script>
    function checkAnswers() {
        var correctAnswers = ["a", "a", "b", "b"]; // Replace with correct answers
    
        var form = document.getElementById("quizForm");
        var score = 0;
    
        for (var i = 0; i < form.elements.length - 1; i++) { // -1 to exclude the submit button
            var element = form.elements[i];
            if (element.type === "radio" && element.checked) {
                if (element.value === correctAnswers[i]) {
                    score++;
                    element.parentNode.style.color = "green"; // Mark correct answer
                } else {
                    element.parentNode.style.color = "red"; // Mark incorrect answer
                }
            }
        }
    
        alert("You scored " + score + " out of " + correctAnswers.length);
    
        return false; // Prevent form submission
    }
    </script>

    <!-- quiz_results.php -->

<?php
// Process form data and display results here
?>

<p>Thank you for completing the quiz!</p>

<a href="quiz.html">Back to Quiz</a>