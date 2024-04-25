<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Retrieve user information from the file
    $users = file("users.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($users as $user) {
        list($storedUsername, $storedPassword) = explode(",", $user);
        if ($username == $storedUsername && $password == $storedPassword) {
            echo "Login successful. Welcome, $username!";
            return;
        }
    }

    echo "Invalid username or password. <a href='Login.html'>Try again</a>";
}
?>
