<!DOCTYPE html>
<html>
    <head>
        <title>Review Page </title>
        <link rel = "stylesheet" href = "reviewstyles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body style="background: rgb(154, 154, 237);">
        <center>
            <h1><b>Customer Reviews</b></h1>
        </center>
        <center>
        <div class = "main">
            <form action = "insert.php"  method = "POST" enctype = "multipart/form-data">
                <label for = "">Customer Name : </label>
                <input type = "text" name = "name"><br><br>
                <label for = "">Comments about our projects : </label><br><br>
                <textarea name = "comment" id = "" rows = "5" cols = "40"></textarea><br>
                <label for = "">Image : </label>
                <input type = "file" name = "image" id = ""><br><br>
                <button type = "submit" name = "upload"> Upload </button>
            </form>
        </div>
        </center>

        <!--fetch data-->

        <div class="container">

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Comment</th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>

    </tr>
  </thead>
  <tbody>
        <?php
        include 'connect.php';
        // Fetch all records from the "reviews" table
        $result = mysqli_query($conn, "SELECT * FROM `reviews` ORDER BY Id ASC");

        // Update the ID numbers
        $newID = 1;
        while ($row = mysqli_fetch_array($result)) {
            $currentID = $row['Id'];
            mysqli_query($conn, "UPDATE `reviews` SET Id = $newID WHERE Id = $currentID");
            
            // Display the updated row in the table
            echo "
            <tr>
                <td>$newID</td>
                <td>$row[Name]</td>
                <td>$row[Comment]</td>
                <td><img src='$row[Image]' width='500px' height='300px'></td>
                <td><a href='delete.php?Id=$newID' class='btn btn-danger'>Delete</a></td>
                <td><a href='update.php?Id=$newID' class='btn btn-danger'>Update</a></td>
            </tr>
            ";

            $newID++;

        }

        ?>
    
  </tbody>
</table>
</div>

</body>

</html>

