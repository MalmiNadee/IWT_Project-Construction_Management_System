<?php
  include "connect.php";

  if(isset($_POST['update']))
  {$firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $gender=$_POST['gender'];
    $phoneNum=$_POST['mobile'];
    $birthday=$_POST['dob'];
    $email=$_POST['mail'];
    $address=$_POST['address'];
    $Project_id=$_POST['pr_id'];
    $user_id=$_POST['id'];

      $sql="UPDATE customer SET firstName = '$firstName', lastName = '$lastName', gender = '$gender',  phoneNum = '$phoneNum',
      birthday = '$birthday', email = '$email',address = '$address',  Project_id = '$Project_id' WHERE id = '$user_id'";

      $result = $conn->query($sql);

      if($result == TRUE)
      {
        echo "<script>alert('Record Updated Successfully')</script>";
      }
      else
      {
        echo "<script>alert('Error : ')</script>" .$sql. "<br/>" . $conn->error;
      }
  }

  if(isset($_GET['id']))
  {
    $user_id =$_GET['id'];

    $sql = "SELECT * FROM customer WHERE id = '$user_id' ";

    $result = $conn->query($sql);

    if($result->num_rows>0)
    {
       while($row = $result->fetch_assoc())
       {
        $firstName=$row['firstName'];
       $lastName=$row['lastName'];
       $gender=$row['gender'];
       $phoneNum=$row['phoneNum'];
       $birthday=$row['birthday'];
       $email=$row['email'];
      $address=$row['address'];
      $Project_id=$row['Project_id'];
      $id=$row['id'];
  }
   ?>
   <!DOCTYPE html>
   <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Home.css">
	<link rel="stylesheet" type="text/css" href="User.css">
    <title>Details Update Form</title>
    </head>
    <body>
    <div class="backg">
   <h3>User Update form</h3>
   <center>
			 <form style="color:white" method="post" action="">
			 <fieldset>
				
				First Name: <br/>
				<input type="text" name="fname" value="<?php echo $firstName; ?>" required><br/>
                <input type="hidden" name="id" value="<?php echo $id; ?>" required>
				Last Name: <br/>
				<input type="text" name="lname" value="<?php echo $lastName; ?>" required><br/>
				Gender:<br/>
				<input type="radio" name="gender" value="male" <?php if($gender =="male") { echo "checked";} ?> >Male
				<input type="radio" name="gender" value="female" <?php if($gender =="female") { echo "checked";} ?> >Female<br/>
				Mobile Number:<br/>
				<input type="text" name="mobile"  value="<?php echo $phoneNum; ?>" required><br/><br/>
				Date of Birth: <br/>
				<input type="date" name="dob" value="<?php echo $birthday; ?>" required><br/><br/>
				Email:<br/>
				<input type="email" name="mail" pattern="[a-z0-9A-Z.%+_]+@+[a-zA-Z0-9.%+-]\.[a-z][2,3]"
				 placeholder="name@gmail.com" value="<?php echo $email; ?>" required><br/>
				Address:<br/>
				<textarea name="address" rows="5" cols="50" required><?php echo $address; ?></textarea><br/><br/>
                Project Type: <br/>
				<input type="text" name="pr_id" value="<?php echo $Project_id; ?>" required><br/>
        <button type="submit" id="submitBtn" name= "update" >Update</button>

			 </fieldset>
             </form>
			 </center>
       <div class="plan">
		 <button type="button" onclick="window.location.href='SubmitUserDetails.php'"><span></span>Back to Table</button>
						 
	     </div>
    </div>
    </body>
   </html>
   <?php
   } else
   {
     Header("location:SubmitUserDetails.php");
     exit();
   }
   $conn->close();
}
?>








