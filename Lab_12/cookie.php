<?php
$cname = 'email';
$cvalue = 'yashrajsinh@gmail.com';

// $exp_time= time()+86400;
// echo $exp_time."<br/>";

// echo date('Y-m-d',$exp_time);



//set cookie (valid for 30 days)
setcookie($cname,$cvalue,time()+84600*30,"/");//set before any output


echo "Cookie 'email' has been set.<br/>";

?>
<a href="view_cookie.php">View Cookie</a>
<a href="destroy_cookie.php"> Destroy Cookie</a>


