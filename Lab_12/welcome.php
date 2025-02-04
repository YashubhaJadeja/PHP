<?php
session_start();

if(!isset($_SESSION['email']))
{
    header("Location: session.php");
    exit();
}
?>

<html>
    <head>
        <title>Welcome</title>
    </head>
    
        <h2>Welcome,<?php echo htmlspecialchars($_SESSION['email']);  ?>!</h2>

        <p>You are now logged in.</p>
        <a href="second.php">Go to Second Page</a><br/>
        <a href="destroysession.php">Logout</a>
    </body>
</html>