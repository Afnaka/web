<html>
<head></head>
<body>
<form action="" method="POST">
    Student Mark:
    <input type="number" name="student_mark"> <br><br>
    Total Mark:
    <input type="number" name="total_mark"><br><br>
    <input type="submit" name="submit" id="check">
</form>

</body>
</html>

<?php
if(isset($_POST["submit"])) {
    $student_mark = $_POST['student_mark'];
    $total_mark = $_POST['total_mark'];

    if($total_mark == 0) {
        echo "Total mark cannot be zero.";
    } else {
   
        $percentage = ($student_mark / $total_mark) * 100;

 
        if ($percentage >= 60) {
            $grade = "First Division";
        } elseif ($percentage >= 45 && $percentage < 60) {
            $grade = "Second Division";
        } elseif ($percentage >= 33 && $percentage < 45) {
            $grade = "Third Division";
        } else {
            $grade = "Fail";
        }

        echo "Grade of student is: $grade";
    }
}
?>

