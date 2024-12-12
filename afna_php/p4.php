<html>
<head></head>
<body>
<form action="" method="POST">
    Number:
    <input type="number" name="number" required> <br><br>
    
    <input type="submit" name="submit" value="calculate">
</form>
</body>
</html>

<?php
 if(isset($_POST["submit"])){
 $number=$_POST['number'];
 $fact=1;
 for($i=1;$i<=$number;$i++){
 $fact=$fact*$i;
 }
 echo"factorial of $number is $fact";
 }
?>

