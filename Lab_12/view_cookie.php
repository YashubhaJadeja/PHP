<?php


echo "This is the view page.<br/>";

// Check if the cookie is set
if(isset($_COOKIE['email'])){
    echo "Cookie email value :" . $_COOKIE['email']."<br/>";
}
else{
    echo "Cookie is not set yet.<br/>";
}

?>
<a href="cookie.php">Set Cookie</a>
<a href="destroy_cookie.php"> Destroy Cookie</a>
