<html>
<head>
<style>
h1{
color:brown;
text-align:center;
text-transform:uppercase;
}

table {

margin-left:34%;
width:30%
}
td{
padding:7px;
margin-left:6px;

}
button{
margin-left:45%;
}
input{

width:90%;
padding:4px}
</style>

</head>
<body>
<h1>Student Registeration Form</h1>
<form action="insert.php" method="POST">
<table  border="1">
<tr>
<td>Name:</td>
<td><input type="text" name="name" required></td>
</tr>
<tr>
<td>Email_id:</td>

<td><input type="email" name="email" required></td>
</tr>
<tr>
<td>Mobile Number:</td>
<td><input type="text" name="phno" required></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="text" name="gender" required></td>
</tr>
<tr>
<td>Address:</td>
<td><input type="text" name="address" required></td>
</tr>
<tr>
<td>Course:</td>
<td><input type="text" name="course" required></td>
<tr>
<td>password:</td>

<td><input type="password" name="password" required></td>
</tr>
<tr>
<td colspan="3"><button type="submit" value="submit" name="submit" id="submit">SUBMIT</td>
</tr>
</table>
</form>
</body>
</html>


