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
$sum=0;
for($i=2;$i<$number;$i++){
$isprime=true;
for($j=2;&j<=sqrt($i);$i++){
if($i%$j==0){
$isprime=false;
break;
}
}
if($isprime){
$sum=$sum+$i;
}
}
echo"the sum of prime number less than $number is $sum";
}
?>
