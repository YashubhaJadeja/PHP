<?php
if (!isset($_COOKIE["loggedin"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Welcome, <?php echo $_COOKIE["loggedin"]; ?>!</h2>
    <p>You are successfully logged in.</p>
    
</body>
</html>
