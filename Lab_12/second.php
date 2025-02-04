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
        <title>

    Second
        </title>
    </head>
    
        <h2>Welcome to the second page,<?php echo htmlspecialchars($_SESSION['email']);  ?>!</h2>

        <p>You are now in second page</p>
        <a href="welcome.php"> Back Welcome Page</a><br/>
        <a href="destroysession.php">Logout</a>
    </body>
</html>