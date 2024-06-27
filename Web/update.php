<!DOCTYPE html>
<html>
    <head>
        <title>Review Page </title>
        <link rel = "stylesheet" href = "reviewstyles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
        input{
            margin : 10px;
        }
</style>
</head>
<body>

<?php

include 'connect.php';
$ID = $_GET['Id'];
$Record = mysqli_query($conn,"SELECT * FROM `reviews` WHERE Id = $ID");
$data = mysqli_fetch_array($Record);

?>

    <center>
        <div class = "main">
            <form action = "update1.php"  method = "POST" enctype = "multipart/form-data">
                <label for = "">Customer Name : </label>
                <input type = "text" value="<?php echo $data['Name'] ?>" name = "name"><br><br>
                <label for = "">Comments about our projects : </label><br><br>
                <textarea value="<?php echo $data['Comment'] ?>"  name = "comment" id = ""  rows = "5" cols = "40"></textarea><br>
                <label for = "">Image : </label>
                <td><input type = "file" name = "image" value="<?php echo $data['Image'] ?>"><img src="<?php echo $data['Image'] ?>" width = '400px' height = '300px' alt = ""></td><br><br>
                <input type ="hidden" name = "Id" value = "<?php echo $data['Id'] ?>">
                <button type = "submit" name = "update" class = 'btn btn-danger m-2'> Update </button>
            </form>
        </div>
    </center>

        


</body>
</html>