<?php
// Check if the file exists and read it
if (file_exists("messages.txt")) {
    $messages = file_get_contents("messages.txt");
    echo $messages;
} else {
    echo "<p>No messages yet. Be the first to post one!</p>";
}
?>
