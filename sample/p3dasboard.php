<?php
if (!isset($_COOKIE['email'])) {
    // Redirect to login page if not logged in
    header("Location:p3login.php");
    exit();
}
$email = $_COOKIE['email'];
$con = new mysqli("localhost", "root", "", "student");
$sel = $con->query("SELECT * FROM `student_cookie` WHERE  email='$email'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Course</th>
            <th>Password</th>
        </tr>
        <?php
        if ($sel->num_rows > 0) {
            while ($result = mysqli_fetch_array($sel)) {
                $name = $result['name'];
                $email = $result['email'];
                $phno = $result['phno'];
                $gender = $result['gender'];
                $address = $result['address'];
                $course = $result['course'];
                $password = $result['password'];
                echo "
                <tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$phno</td>
                    <td>$gender</td>
                    <td>$address</td>
                
  	  <td>$course</td>      
 <td>$password</td>
                </tr>
                ";
            }
        } else {
            echo "<tr><td colspan='7'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
