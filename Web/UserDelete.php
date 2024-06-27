<?php
   include "connect.php";

   if(isset($_GET['id']))
   {
     $user_id = $_GET['id'];


     $sql="DELETE FROM customer WHERE id ='$user_id' ";

     $result = $conn->query($sql);

     if($result === TRUE)
     {
       echo "<script>alert('Record Deleted Successfully')</script>";
     }
     else
     {
       echo "<script>alert('Error')</script>" .$sql. "<br/>" . $conn->error;
     }
   }
?>
<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Home.css">
	<link rel="stylesheet" type="text/css" href="User.css">
    <title>Delete Records</title>
  </head>
  <body>
       <div class="backg">
        <br/><br/><br/>
       <center>
       <div class="plan">
		 <button type="button" onclick="window.location.href='SubmitUserDetails.php'"><span></span>Back to Table</button>
						 
	     </div>
</center>       
         </div>					  
  </body>
</html>