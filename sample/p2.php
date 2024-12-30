<?php
$con=new mysqli("localhost","root","","student");
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];
$sel=$con->query("SELECT * FROM `student_det` WHERE email='$email'and password='$password'");
if($sel->num_rows>0){
echo"<script>alert('login succesfully')</script>";
header("location:p2dasboard.php");
}
else{
echo"<script>alert('login unsuccesfully')</script>";
}
}
?>
<html>
<head>
<style>
h1{
color:brown;
text-align:center;
text-transform:uppercase;

}
button{
padding:7px;
border-radius:3px;
width:90%;
background-color:lightblue;
color:white;
}
table {
border:1px solid black;
margin-left:34%;
width:30%
}
td{
padding:7px;
margin-left:6px;
}
input{
width:90%;
padding:4px}
</style>
</head>
<body>
<h1>LOGIN</h1>
<form action="" method="POST">
<table>
    <tr>
<td>Email_id:</td>
    </tr>
    <tr>
<td><input type="email" name="email" required></td>
  
  <tr>
<td>password:</td>
    </tr>
    <tr>
<td><input type="password" name="password" required></td>
   </tr>
   <tr>
<td><button type="submit" value="submit" name="submit"   id="submit">LOGIN</td>
   </tr>
</table>
</form>
</body>
</html>
