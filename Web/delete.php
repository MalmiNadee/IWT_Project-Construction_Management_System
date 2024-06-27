<?php
include 'connect.php';
 $ID = $_GET['Id'];
mysqli_query($conn,"DELETE FROM `reviews` WHERE Id = $ID");

header('location:review.php');

?>