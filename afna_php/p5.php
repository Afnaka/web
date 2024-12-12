<html>
<head></head>
<body>
<form action="" method="POST">
    Number:
    <input type="number" name="number" required> <br><br>
    
    <input type="submit" name="submit" value="check">
</form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
$number=$_POST['number'];
if($number<0){
$result="$number is negative number";
}
else if($number>0){
$result="$number is positive number";
}
else{
$result="zero";
}
echo"$result";

}


?>
