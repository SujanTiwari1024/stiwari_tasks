<?php include "header.php";

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$dob= $_POST['bdate'];
$color= $_POST['color'];


echo "<h3> Your name is $fname $lname /.
Your fav color is $color and your date of birth is $bdate. 
</h3>";


?>
<?php include "footer.php" ?>