<?php
$servername ="localhost";
$usrname = "root";
$password = "";
$dbname = "user";

$conn=mysqli_connect($servername,$usrname,$password,$dbname);

if(!$conn)
{
    die ("Connection Failed : ".mysqli_connect_error());
}



?>    