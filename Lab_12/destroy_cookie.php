<?php
$cname = 'email';

//Delete the cookie by setting its expiration time to the past 

setcookie($cname,'',time()-3600,"/");//Set before any output
echo "Cookie 'email' has been destroyed.<br/>";
?>
<a href="cookie.php">Set Cookie</a>
<a href="view_cookie.php">View Cookie</a>