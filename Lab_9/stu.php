
<html>
<head>
<title>Student Registration Form</title>


</head>
<body>

<fieldset>

<legend>Student Registration Form </legend>
    <form id="regloginform" method="post" action="stu_controller.php"  novalidate >


       

       <lable>Full Name :</lable>
       <input type="text" name="fname" required  placeholder="Enter Fullname" />
       <?php if(isset($_GET['fname']))
       {
         echo "<span style='color:red'> {$_GET['fname']}</span>";
       }
       ?>
       <br/><br/>

       <lable>Primary Email:</lable>
       <input type="text" name="email" required  placeholder="Enter Email" />
       <?php if(isset($_GET['email']))
       {
         echo "<span style='color:red'> {$_GET['email']}</span>";
       }
       ?>
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
       
       <input type="submit"  name="submit" value="Sign in"/>
        </form>

</fieldset>





</body>
</html>