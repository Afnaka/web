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
$temp=$number;
$numdigit=strlen((string)$number);
while($temp>0){
$digit=$temp%10;
$sum=$sum+pow($digit,$numdigit);
$temp=(int)($temp/10);
}
if($sum==$number){
echo"$number is armstrong";
}
else{
echo "$number is not armstrong";
}

}
?>
