<?php
$title = "Update your info";
include '../layout/header.php';
$a = $_GET['id'];
include 'db.php';
$result =mysqli_query($conn,"Select * from studentinfo where id = '$a' ");
$row = mysqli_fetch_array($result);
?>
<h2> Upade your information below </h2>
<form method="update" method="post" action="">
    <input type="text" name="fname" placeholder="First name" required value="<?php echo $row['fname']; ?>"><br><br>
    <input type="text" name="lname" placeholder="Last name" required value="<?php echo $row['lname']; ?>"><br><br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row['city']; ?>"><br><br>
    <select name="groupid" value="<?php echo $row['groupid']; ?>" >
<option value="BBCAP22"> BBCAP22</option>
<option value="BBCAP21"> BBCAP21</option>
<option value="others"> others</option>
</select><br><br>
<input type="submit" value="Upadte your info" name="update"> <br><br>
<input type="submit" value="Delete your info" name="delete"> <br><br>

</form>
<?php
if (isset($_POST['update'])){
    $fname = $_POST['fname'];
    $fname = $_POST['lname'];
    $query = mysqli_query($conn, "UPDATE studentinfo set fname='$fname',
    lname='$lname' where id='$a' ");
    if($query){
        echo "<h2>Your information is updated successfully.</h2>";
    }
    else echo "Record Not Modified";
}
?>