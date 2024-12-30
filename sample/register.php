<?php
$con=new mysqli("localhost","root","","student");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $admno=$_POST['admno'];
    $password=$_POST['password'];
    $res=$con->query("INSERT INTO `student`(`name`, `email`, `admno`, `password`) 
    VALUES ('$name','$email','$admno','$password')");
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
    <h1>form</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>name</td>
                <td><input type="text"name="name" id="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email"name="email" id="email"></td>
            </tr>
            <tr>
                <td>admno</td>
                <td><input type="text"name="admno" id="admno"></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password"name="password" id="password"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Register</button></td>
            </tr>
        </table>
    </form>
</body>
</html>