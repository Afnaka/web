<?php
$con=new mysqli("localhost","root","","student");
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$course=$_POST['course'];
$password=$_POST['password'];
$res=$con->query("INSERT INTO `student_cookie`(`name`, `email`, `phno`, `gender`, `address`, `course`, `password`)
VALUES ('$name','$email','$phno','$gender','$address','$course','$password')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
  <style>   
        h3{
            text-align: center;
            font-size: 27px;
        }
       td{
        padding: 7px;
       }
    </style>
</head>
<body><center>
    <form action="">
        <h3>STUDENT REGISTRATION FORM</h3>
        <table border="1">
            <tr>
                <td>NAME</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr><td>EMAIL_ID</td> <td><input type="email" name="email"></td></tr>
            <tr><td>MOBILE NUMBER</td> <td><input type="tel" pattern="[0-9] {10}"  
              name="phn"></td></tr>
            <tr><td>GENDER </td><td>
            <label for="male">Male</label>
            <input type="radio" name="gender">
            <label for="female" name="gender">female</label>
            <input type="radio">
            </td></tr>
           <tr><td>ADDRESS</td> <td><textarea name="address" 
            id=""></textarea></td></tr>
           <tr><td>COURSE</td> <td><input type="text" name="course"></td></tr>
           <tr><td>PASSWORD</td> <td><input type="password" 
          
  name="password"></td></tr>
         <tr><td colspan="3"> <center><input type="submit" name="sumbit"
          value="submit">
        </table>
    </form>
</center>
</body>
</html>
