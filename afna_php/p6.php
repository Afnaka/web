<html>
<head></head>
<body>
<form action="" method="POST">
    Number1:
    <input type="number" name="number1" required> <br><br>
    Number2:
    <input type="number" name="number2" required> <br><br>
    
    
    <input type="submit" name="submit" value="sum">
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
$number1=$_POST['number1'];
$number2=$_POST['number2'];
$sum=$number1+$number2;
echo"Sum of $number1+$number2 is $sum";
}
?>
