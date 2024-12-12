<html>
<head></head>
<body>
<form action="" method="POST">
    number:
    <input type="number" name="number" required> <br><br>
    divisor:
    <input type="number" name="divisor" required> <br><br>
    
    
    <input type="submit" name="submit" value="check">
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){

$number=$_POST['number'];
$divisor=$_POST['divisor'];
if($divisor==0){
echo"division by 0 is not possible";
}
else{
if($number%$divisor==0){
echo"$number is divisible by $divisor";

}
else
echo"not divisible";
}
}
?>
