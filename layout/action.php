<?php $title = "Your Information";
include "header.php";

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$dob= $_POST['bdate'];
$color= $_POST['color'];


echo "<h4> Your name is $fname $lname.<br>
Your fav color is $color and your date of birth is $dob. 
</h4>";


?>
<?php include "footer.php" ?>