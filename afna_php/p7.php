<html>
<head></head>
<body>
<form action="" method="POST">
    breadth of triangle:
    <input type="number" name="breadth" required> <br><br>
    height of triangle:
    <input type="number" name="height" required> <br><br>
    
    
    <input type="submit" name="submit" value="area">
</form>
</body>
</html>
<?php

if(isset($_POST["submit"])){
$breadth=$_POST['breadth'];
$height=$_POST['height'];
$area=($breadth*$height)*0.5;
echo"area of triangle is $area";
}
?>
