<?php
include 'connect.php';
$ID=$_GET['Id'];
mysqli_query($conn,"DELETE FROM `crudtable` WHERE Id=$ID");
?>