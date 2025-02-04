<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // For simplicity, we use hardcoded username and password
    $valid_username = "admin";
    $valid_password = "admin123";

    if ($username == $valid_username && $password == $valid_password) {
        // Set a cookie valid for 1 hour
        setcookie("loggedin", $username, time() + 3600, "/");
        header("Location: welcome.php");
    } else {
        echo "Invalid username or password.";
    }
}
?>
