<?php
include 'connect.php';
if(isset($_POST['update'])){
    $ID = $_POST['Id'];
    $NAME = $_POST['name'];
    $COMMENT = $_POST['comment'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);

    mysqli_query($conn,"UPDATE `reviews` SET `Name`='$NAME',`Comment`='$COMMENT',`Image`='$img_des' WHERE Id = '$ID' ");
    header("location:review.php");



}
?>