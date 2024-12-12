<?php
$con = new mysqli("localhost","root","","student");

if(isset($_POST['submit'])){
echo "test";
$name=$_POST['name'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$course=$_POST['course'];
$password=$_POST['password'];
$sql = "INSERT INTO `student_info`(`name`, `email`, `phno`, `gender`, `address`, `course`, `password`) VALUES ('$name','$email','$phno','$gender','$address','$course','$password');";
echo $sql;
$res = $con->query($sql);
if($res) 
	{
		echo "inserted";
}
else
{
		echo "not inserted";
	
} 
}

?>
}
