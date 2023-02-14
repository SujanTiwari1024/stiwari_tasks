<?php $title = "Variables";
include 'header.php';?>
<h2>Variable & Operators</h2>
<h4>Create a simple html form to get Firstname and Lastname from the user and use echo statement to print using h3 tag: <br>
Hello …., You are welcome to my site.</h4><br>

<form action="action.php" method="post">
<div class="row">
<div clss="col">

Firstname: <input type="text" name="fname"> <br>
Lastname: <input type="text" name="lname"> <br>
Birthdate: <input type="date" name="bdate"> <br>
Select Color: <input type="color" name="color"><br>
<input type="submit" value="submit"><br><br><br><br>
</div>
</form>

<?php include "footer.php"?>