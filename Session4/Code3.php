<html>
<head>
    <title>
        Employee Details
    </title>
</head>
<body>
<h4>
    Enter your details
</h4>
<FORM METHOD=POST ACTION="EMP_DETAILS.php">
    <table>
        <tr>
            <td>Employee ID</td>
            <td><input TYPE="text" NAME="empid"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input TYPE="text" name="Name"></td>
        </tr>
        <tr>
            <td>Department</td>
        <td>
        <input TYPE="radio" NAME="dept" VALUE="Finance">Finance
        <input TYPE="radio" NAME="dept" VALUE="Marketing">Marketing
        <input TYPE="radio" NAME="dept" VALUE="IT">IT
        </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" NAME="email"></td>
        </tr>
    </table>
    <br>
    <td><input TYPE="submit" VALUE="SUBMIT"></td>
</FORM>
</body>
</html>