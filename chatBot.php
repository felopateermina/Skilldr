<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP ChatBot</title>
</head>
<body>


<?php
// Function to simulate NLP analysis (replace with a real NLP library)
function analyzeInput($userInput) {
    // Simulated analysis: just return the input as-is
    return $userInput;
}

// Function to get bot response based on user input
function getBotResponse($userInput) {
    $userInputAnalysis = analyzeInput($userInput);

    // Simulated learning: just display the analyzed input for now
    return 'I did not understand that. Analyzed Input: ' . $userInputAnalysis;
}

// Handle user input
if (isset($_POST['userInput'])) {
    $userInput = $_POST['userInput'];
    $botResponse = getBotResponse($userInput);

    // Display user and bot messages
    echo '<p>You: ' . htmlentities($userInput) . '</p>';
    echo '<p>Bot: ' . htmlentities($botResponse) . '</p>';
}
?>



<!-- HTML form for user input -->
<form method="post" action="chatBot.php">
    <label for="userInput">You:</label>
    <input type="text" name="userInput" id="userInput" required>
    <button type="submit">Send</button>
</form>

</body>
</html>
