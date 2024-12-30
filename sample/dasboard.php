<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:login.php");
    exit();
}
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>admno</th>
        <th>password</th>
    </tr>
    <?php
    $con=new mysqli("localhost","root","","student");
    $sel=$con->query("SELECT * FROM `student` WHERE email='$email'");
    if($sel->num_rows>0){
        while($result=mysqli_fetch_array($sel)){
            $name=$result['name'];
            $email=$result['email'];
            $admno=$result['admno'];
            $password=$result['password'];
            echo"
            <tr>
             <td>$name</td>
             <td>$email</td>
             <td>$admno</td>
              <td>$password</td>
            </tr>
            ";
        }
    }

   ?>
</body>
</html>