<?php
error_reporting(0);
$servername ="localhost";
$username   ="root";
$password   ="";
$dbname     ="kalyan";

//$conn =mysqli_connect($servername,$username,$password,$dbname);
$conn=new mysqli("localhost","root","","kalyan");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>