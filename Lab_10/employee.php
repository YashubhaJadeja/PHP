<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab</title>
</head>
<body>
    <header>
        <h1>Employee Registration Form</h1>
    </header>
    <form style="border: 2px solid #000000;" novalidate autocomplete="on" action="Emp_reg.php" method="get">
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
                <td>Dept</td>
                <td><select name = "course">
                    <option value="select your Course">
                        select your Dept
                    </option>
                    <option value = "CSE">
                       CSE
                    </option>
                    <option value="EE">
                       EE
                    </option>
                    <option value="CIVIL">
                        CIVIL
                    </option>
                </select></td>
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