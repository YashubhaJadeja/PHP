<?php

echo "---------------------Employee Details------------------"."<br/>";
$fullname=$_POST['fname'];
$email=$_POST['email'];
$gender=$_POST['gender'];

$dob=$_POST['dob'];
$phone=$_POST['phone'];
$add=$_POST['add'];
$course=$_POST['course'];
$interest=$_POST['interest'];

echo "Full Name : ".$fullname."</br>";

echo "Email : ".$email."</br>";

echo "Gender : ".$gender."</br>";

echo "Date of Birth : ".$dob."</br>";

echo "Phone : ".$phone."</br>";

echo "Add : ".$add."</br>";

echo "Course : ".$course."</br>";

if(!empty($_POST['interest'])){

    echo "Interests : ". implode(",",$_POST['interest'])."<br/>";
}
else{
    echo "Interests : None <br/>";

}


echo "---------------------Employee image Details------------------"."<br/>";

$file_name=$_FILES['image']['name'];
$file_tmpname=$_FILES['image']['tmp_name'];
$file_size=$_FILES['image']['size'];
$file_type=$_FILES['image']['type'];


echo "file Name :" .$file_name."<br/>";

echo "file tmp Name :" .$file_tmpname."<br/>";

echo "file Size :" .$file_size."<br/>";
echo "file Type :" .$file_type."<br/>";

$targetDir="images/";


$targetfile=$targetDir.basename($file_name);

$arraytype=array("image/jpg","image/png","image/gif","image/jpeg");
if(in_array($file_type,$arraytype))
{

    if($file_size>5000)
 {

    if(move_uploaded_file($file_tmpname,$targetfile)){

        echo "<p style='color:green'> file uploaded successfully </p>";
        echo "<img src='" .htmlspecialchars($targetfile) . "' alt=' Profile Picture' style='width:150px;border-radius:50%:';>"."<br/><br/>";
        
    }
    else{
        echo "<p style='color:red'> file not uploaded</p>";
    }
}


else{
    echo "file size is too small to be uploaded ";
    }


}

else{
    echo " <p style='color:blue'> uploade image file </p>";
    }

    


echo "<br/>";
    echo "---------------------Employee CV Details------------------"."<br/>";

    $file_name=$_FILES['cv']['name'];
    $file_tmpname=$_FILES['cv']['tmp_name'];
    $file_size=$_FILES['cv']['size'];
    $file_type=$_FILES['cv']['type'];
    
    
    echo "file Name :" .$file_name."<br/>";
    
    echo "file tmp Name :" .$file_tmpname."<br/>";
    
    echo "file Size :" .$file_size."<br/>";
    echo "file Type :" .$file_type."<br/>";
    
    $targetDir="images/cvs/";
    
    
    $targetfile=$targetDir.basename($file_name);
    
    $arraytype=array("application/pdf");
    if(in_array($file_type,$arraytype))
    {
    
        if($file_size>5000)
     {
    
        if(move_uploaded_file($file_tmpname,$targetfile)){
    
            echo "<p style='color:green'> file uploaded successfully </p>";
            echo "<p>Download your CV:</p><a href='" .htmlspecialchars($targetfile) . "'>Download</a> "."<br/><br/>";
        
}
        else{
            echo "<p style='color:red'> file not uploaded </p>";
        }
    }
    
    
    else{
        echo "file size is too small to be uploaded ";
        }
    
    
    }
    
    else{
        echo " <p style='color:blue'> uploade cv file </p>";
        }
    
    




?>