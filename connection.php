<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "classic_shop";
$connection = mysqli_connect($servername,$username,$password,$dbname);

if(!$connection)
{
    die("connection failed:".$connection->connect_error);
}
?>