<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['email'])) {
    header("Location: welcome.php");
    exit();
}
?>


<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // You can add proper authentication logic here
        $_SESSION['email'] = $_POST['email'];  // Save email to session
        header("Location: welcome.php"); // Redirect to welcome page after login
        exit();
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="session.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email" required><br><br>
        <input type="password" name="password" placeholder="Enter your password" required><br><br>
        <input type="submit" name="submit" value="Login">
    </form>

  
</body>
</html>
