

<?php
//include db connection
include 'connect.php';

if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $COMMENT = $_POST['comment'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);

    //insert data

    mysqli_query($conn,"INSERT INTO `reviews`( `Name`, `Comment`, `Image`) VALUES ('$NAME','$COMMENT','$img_des')");
    header("location:review.php");
    
}

?>