<?php
$servername = "db";
$username = "bcap22";
$password = "Harmonic90!";
$dbname = "bcap22";

//establishing connection 
$conn = new mysqli($servername, $username, $password, $dbname);

//checking connection
/* if ($conn->connection_error){
    die("Connection Failed:" .$conn->connect_error);
}
 */
if ($conn->connect_error){
        
    die("Connection failed". $conn->connect_error);

}
?>