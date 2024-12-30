<?php
session_start();

$con=new mysqli("localhost","root","","student");
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $res=$con->query("SELECT * FROM `student` WHERE email='$email' and password='$password'");
    if($res->num_rows>0){
        $rows=mysqli_fetch_array($res);
        $_SESSION['email']= $rows['email'];
           echo "<script>alert('login succesfully')</script>";
           header("location:dasboard.php");
    }
    else{
        echo "<script>alert('login unsuccesfull')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
        <table>

            <tr>
                <td>Email</td>
                <td><input type="email"name="email" id="email"></td>
            </tr>
            
            <tr>
                <td>password</td>
                <td><input type="password"name="password" id="password"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>