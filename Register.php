<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $data = $username . "," . $password . PHP_EOL;
    file_put_contents("users.txt", $data, FILE_APPEND);

    echo "Registration successful. <a href='Login.html'>Login</a>";
}
?>