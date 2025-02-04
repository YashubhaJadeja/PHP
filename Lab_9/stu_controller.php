<?php
if(isset($_POST['submit']))
{
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $error = [];

if(empty($name)){
    $error['fname']="Name is required";
}

elseif(!preg_match("/^[a-zA-Z\s]+$/",$name)){
    $error['fname']="Name should contain only alphabets and spaces";
}else{
    echo "Name:".htmlspecialchars($name)."<br/>";
}
if (empty($_POST["$email"])){
    $error['email']="empty email";
}else if(!preg_match("/^([a-z0-9\+_\-]+(\.[a-z0-9\+-\-]+*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
    $error['email']="Please enter a correct email";
}else{
    echo "Email:".htmlspecialchars($email)."<br/>";
}

echo  "Email:". $email;
// if (!empty($error)){
//     $querystring = http_bulid_query($error);
//     header("location:stu.php?$querystring");
//     exit();
// }
}









//     if(empty($name)){
//        // echo "enter the name";
//         header("location:stu.php?name=enter the name");
//         exit();

//     }
//    else if(empty($email)) {
//     // echo $name."<br/>";
//     header("location:stu.php?email=enter the emails");
//     exit();

// }

// echo $name."<br/>";
//     echo $email;
//     }

?>