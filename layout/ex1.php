<?php $title = "PHP Script";
include "header.php" ?>

<h2>3.1 Write simple PHP script.</h2>

<?php 
echo "Sujan Tiwari <br>";
echo "BCAP22 <br>";
// somechanges
?><br>

<h2>3.2 Write a PHP code to display given message.</h2>
<?php
echo "Hello World! My name is \"Sujan\"";
?><br><br>

<h2>3.2 Write a PHP code to display Date.</h2>
<?php echo date("d.m.y"); ?><br><br>

<h2>3.4 Variable in PHP</h2>
<?php $title1 = "PHP is instresting";
echo "<h4>".$title1."</h4>";
?><br>

<h2>3.5 Table & Variables</h2>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo"
<table style='border:1px solid black'>
  <tr style='border:1px solid black'>
    <th>SN</th>
    <th>Name</th>
    <th>Grade</th>
  </tr>
  <tr style='border:1px solid black'>
    <td>1</td>
    <td>Maria Anders</td>
    <td>$g1</td>
  </tr >
  <tr style='border:1px solid black'>
    <td>2</td>
    <td>Francisco Chang</td>
    <td>$g2</td>
  </tr>
  <tr style='border:1px solid black'>
    <td>3</td>
    <td>Sujan Tiwari</td>
    <td>$g3</td>
  </tr>
</table>";
?><br>
<h2>4 Schreenshot</h2>
<img src="Screenshot.png" alt="" width="50%" height="auto">

<?php include "footer.php" ?>



