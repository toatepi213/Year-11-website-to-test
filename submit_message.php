<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    
    // Simple way to store messages - you can use a database or a text file
    // Open file in append mode
    $file = fopen("messages.txt", "a") or die("Unable to open file!");

    // Write the message to the file
    fwrite($file, "<p><strong>$name</strong>: $message</p>\n");

    // Close the file
    fclose($file);

    // Redirect back to the page
    header("Location: index.html");
    exit();
}
?>
