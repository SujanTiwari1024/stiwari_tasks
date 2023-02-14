<?php
$title= "Execise 4 ControlFlow";
 include "header.php"?>

<h3>Task Control flow<h3>
<h4>1. Write a script that gets the current month and prints one of the following responses, 
    depending on whether it's August or not: </h4>
<?php
$name = $_SERVER['PHP_SELF'];
$filename = basename($name);
    echo "It is ".date ("F" , fileatime($filename));
    echo "<br>It is  not a holiday.";
?><br><br>
<h4>2. Assign colour red to a variable. (if else statement)<h4>
<?php 
    $colour="red";
    if ($colour == "red"){
        echo "The colour is red.";
    }    
    else{
        echo "The colour is not red.";
    }    
?><br><br>

<h4>3.Write a program to grade students based on their total score for a subject. 
    Use variable to hold the total score.</h4>
<?php 

$total_score = 80; // Replace this value with the actual total score of the student

if ($total_score > 80) {
    echo "Excellent";
} elseif ($total_score >= 70 && $total_score <= 80) {
    echo "Great";
} elseif ($total_score >= 60 && $total_score < 70) {
    echo "Good";
} elseif ($total_score >= 50 && $total_score < 60) {
    echo "Pass";
} else {
    echo "Fail";
}
?><br><br>
<h4>4.Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)</h4>
<form action="" method ="post">
    <div class="row">
    <div class="col">
    <input type="text" name="fname" required placeholder="First name" class="form-control"> 
</div>
<div class="col">
    <input type="text"  name="lname"required placeholder="Last name" class="form-control">
</div>
<div class="col">
    <input type="text"  name="age"required placeholder="Age" class="form-control"><br>
</div>
<input type="submit" value="Submit">
</div>
</form><br><br>
<h4>5. Browser Detection</h4>
<?php 
$userAgent = $_SERVER['HTTP_USER_AGENT'];

switch (true) {
    case strpos($userAgent, 'Chrome') !== false:
        echo "You are using Google Chrome";
        break;
    case strpos($userAgent, 'Firefox') !== false:
        echo "You are using Mozilla Firefox";
        break;
    case strpos($userAgent, 'Safari') !== false:
        echo "You are using Apple Safari";
        break;
    case strpos($userAgent, 'Edge') !== false:
        echo "You are using Microsoft Edge";
        break;
    default:
        echo "Your browser is not recognized";
        break;
}
?>

<?php include "footer.php" ?>