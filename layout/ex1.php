<?php include "header.php" ?>
<h1>3.1 Write siple PHP script.</h1>

<?php 
echo "Sujan Tiwari <br>";
echo "BCAP22 <br>";
// somechanges
?>

<h1>3.2 Write a PHP code to display given message.</h1>
<?php
echo "Hello World! My name is \"Sujan\""
?>

<h1>3.2 Write a PHP code to display Date.</h1>
<?php echo date("d.m.y") ?>

<h3>3.4 Variable in PHP</h3>
<?php $title1 = "PHP is instresting";
echo "<h1>".$title1."</h1>";
?>

<h3>3.5 Table & Variables</h3>
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
?>
<h3> 4 Schreenshot </h3>
<img src="Screenshot.png" alt="" width="50%" height="auto">


<?php include "footer.php" ?>



