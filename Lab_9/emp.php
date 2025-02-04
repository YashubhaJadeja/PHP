<?php
if(isset($_GET['submit'])) {
$fullname=$_GET['fname'];
$email=$_GET['email'];
$gender=$_GET['gender'];

$dob=$_GET['dob'];
$phone=$_GET['phone'];
$add=$_GET['add'];
$course=$_GET['course'];
$interest=$_GET['interest'];

echo "Full Name : ".$fullname."</br>";

echo "Email : ".$email."</br>";

echo "Gender : ".$gender."</br>";

echo "Date of Birth : ".$dob."</br>";

echo "Phone : ".$phone."</br>";

echo "Add : ".$add."</br>";

echo "Course : ".$course."</br>";

if(!empty($_GET['interest'])){

    echo "Interests : ". implode(",",$_GET['interest'])."<br/>";
}
else{
    echo "Interests : None <br/>";
}

}
?>
<html>
<head>
<title>Employee Registration Form</title>


</head>
<body>

<fieldset>

<legend>Employee Registration Form </legend>
    <form id="regloginform" action="empctr.php" method="post" enctype="multipart/form-data"  novalidate >


       

       <lable>Full Name :</lable>
       <input type="text" name="fname" required  placeholder="Enter Fullname" />
       <br/><br/>

       <lable>Primary Email:</lable>
       <input type="text" name="email" required  placeholder="Enter Email" />
       <br/><br/>

       <lable>Gender:</lable>
       <input type="radio" name="gender" value="Male" checked/>Male

       <input type="radio" name="gender" value="Female" />Female
       <br/><br/>

    <lable>Date of Birth:</lable>
       <input type="date" name="dob" required />
       <br/><br/>

       <lable>Phone Number:</lable>
       <input type="number" name="phone" required  placeholder="Enter Phone No." />
       <br/><br/>

       <lable>Address:</lable>
       <textarea id="add" name="add" rows="4" cols="50" >

</textarea>
      


       <br/><br/><lable>Course:</lable>
       <select name="course">
        <option value="B.Tech">B.Tech</option>
        <option value="M.Tech">M.Tech</option>
        <option value="PhD">PhD</option>
        </select>
       <br/><br/>


       <lable>interest:</lable> <br/>
       <input type="checkbox" name="interest[]" value="Coding" />Coding <br/>
       <input type="checkbox" name="interest[]" value="Design" />Design <br/>
       <input type="checkbox" name="interest[]" value="Gaming" />Gaming <br/>
       <br/>

       <lable>Upload Profile Picture:</lable>
       <input type="file" name="image"/>


       <lable>Upload your CV:</lable>
       <input type="file" name="cv"/>




       
       <br/><input type="submit"  name="submit" value="Sign in"/>
        </form>

</fieldset>





</body>
</html>