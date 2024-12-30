<?php
$con=new mysqli("localhost","root","","student");
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$Adm_no=$_POST['adm_no'];
$branch=$_POST['branch'];
$password=$_POST['password'];
$ins=$con->query("INSERT INTO student_det(`name`, `email`, `adm_no`, `branch`,`password`) 
VALUES ('$name','$email','$Adm_no','$branch','$password')");
echo"$res";
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
h1>student details</h1>
<form action="" method="POST">
<table>
<tr>
<td>Name:</td>
</tr>
<tr>
<td><input type="text" name="name" required></td>
</tr>
<tr>
<td>Email_id:</td>
</tr>

<tr>
<td><input type="email" name="email" required></td>
</tr>
<tr>
<td>Admission Number:</td>
</tr>
<tr>
<td><input type="text" name="adm_no" required></td>
</tr>
<tr>
<td>Branch:</td>
</tr>
<tr>
<td><input type="text" name="branch" required></td>
</tr>
<td>password:</td>
</tr>
<tr>
<td><input type="password" name="password" required></td>
</tr>
<tr>
<td><button type="submit" value="submit" name="submit" 
id="submit">SUBMIT</td>
</tr>
</table>
</form>
<table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Admission No</th>
           
 <th>branch</th>
     </tr>
<?php
$sel=$con->query("SELECT * FROM `student_det`");
if($sel->num_rows>0){
while($display=mysqli_fetch_array($sel)){
$name=$display['name'];
$email=$display['email'];
$Adm_no=$display['adm_no'];
$branch=$display['branch'];
echo "
    <tr>
        <td>$name</td>
        <td>$email</td>
        <td>$Adm_no</td>
        <td>$branch</td>
    </tr>
</table>";
}
}
?>
</body>
</html>
