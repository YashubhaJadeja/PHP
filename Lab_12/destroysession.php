<?php
session_start();
session_destroy(); //Destroy the session

// Redirect to loogin page after loggin out 
header("Location: session.php");
exit();
?>