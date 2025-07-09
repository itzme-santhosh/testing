<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['username']);
    $email = trim($_POST['email']);

    // Basic validation
    if (empty($name) || empty($email)) {
        echo "Error: All fields are required.";
    } else {
        // Escape output to prevent XSS
        $safeName = htmlspecialchars($name);
        $safeEmail = htmlspecialchars($email);

        echo "<h2>Submitted Information</h2>";
        echo "Name: " . $safeName . "<br>";
        echo "Email: " . $safeEmail . "<br>";
    }
} else {
    echo "Please submit the form.";
}
?>
