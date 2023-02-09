<?php include 'header.php';
?>
<h3>In-class Task Variable & Operators 07.02.2023 (variable.php)</h3>
<h2>Create a simple html form to get Firstname and Lastname from the user and use echo statement to print using h3 tag: <br>
Hello …., You are welcome to my site. </h2>

<form action="action.php" method="post">
<div class="row">
<div clss="col">

Firstname: <input type="text" name="fname"> <br>
Lastname: <input type="text" name="lname"> <br>
Birthdate: <input type="date" name="bdate"> <br>
Select Color: <input type="color" name="color"> <br>
<input type="submit" value="submit">
</div>
 
</form>

<?php include "footer.php"?>