<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbName = "crud";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbName);
if(!$conn){
    die("Something went wrong");
}
?>