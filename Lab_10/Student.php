<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab</title>
</head>
<body>
    <header>
        <h1>Student Registration Form</h1>
    </header>
    <form style="border: 2px solid #000000;" novalidate autocomplete="on" action="Register.php" method="get">
    <table>
            <tr>
                <td>FullName:</td>
                <td><input type="text" name = "fullname" placeholder="Enter FullName" required></td>
            </tr>
            <tr>
                <td>Primary Email:</td>
                <td><input type="email" name = "email" placeholder="Enter email" required></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>Male<input type="radio" checked name="gender" value="male"> Female<input type="radio" name="gender" value="female"></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="date"name = "date"></td>
            </tr>
            <tr>
                <td>Phone No.</td>
                <td><input type="number" name = "number" placeholder="Enter 10-Digit Number" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td> <textarea name="Address" cols="25" rows="10"  placeholder="Your Address" required></textarea></td>
            </tr>
            <tr>
                <td>Course:</td>
                <td><select name = "course">
                    <option value="select your Course">
                        select your Course
                    </option>
                    <option value = "B.tech">
                        B.tech
                    </option>
                    <option value="BBA">
                        BBA
                    </option>
                    <option value="BCA">
                        BCA
                    </option>
                </select></td>
            </tr>
            <tr>
                <td>Interests:</td>
                <td>
                    Coding
                    <input type="Checkbox"  name="interest[]" value="coding">
                     Design
                     <input type="checkbox" name="interest[]" value="design">
                     Gaming
                     <input type="checkbox"  name="interest[]" value="gaming">
                    </td>
            </tr>
            
            <tr align="center">
                <td colspan="2">
                    <button >
                        Register
                    </button>
                </td>
                </tr>        
    </table>
</form>
</body>
</html>