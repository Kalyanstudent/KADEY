<?php
error_reporting(0);
$servername ="localhost";
$username   ="root";
$password   ="";
$dbname     ="kalyan";

$conn =mysqli_connect($servername,$username,$password,$dbname);
//$conn=new mysqli("localhost","root","","kalyan");

if($conn){
    echo "connection ok";
}else{
    echo "connection failed".mysqli_connect_error();
}

?>