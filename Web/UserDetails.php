<?php
  include "connect.php";


?>
<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Home.css">
	<link rel="stylesheet" type="text/css" href="User.css">
	<script src="User.js"></script>
    <title>Details Form</title>
  </head>
  <body>
       <div class="backg">
			     <div class="navg">
                     <ul>
	                   <li><a href="Home.php">Home</a></li>
		               <li><a href="#">Project</a></li>
		               <li><a href="#">About Us</a></li>
		               <li><a href="#">Contact Us</a></li>
		               <li><a href="#">FAQs</a></li>
	                 </ul>
					 <button type="button" onclick="window.location.href='User.php'"><span></span>Back to page</button>
             </div>
			 
			 <center>
			 <form style="color:white" method="post" action="SubmitUserDetails.php">
			 <fieldset>
				<legend>User Details</legend>
				First Name: <br/>
				<input type="text" name="fname" placeholder="First Name" required><br/>
				Last Name: <br/>
				<input type="text" name="lname" placeholder="Last Name" required><br/>
				Gender:<br/>
				<input type="radio" name="gender" value="male" >Male
				<input type="radio" name="gender" value="female">Female<br/>
				Mobile Number:<br/>
				<input type="text" name="mobile"  required><br/><br/>
				Date of Birth: <br/>
				<input type="date" name="dob" required><br/><br/>
				Email:<br/>
				<input type="email" name="mail" pattern="[a-z0-9A-Z.%+_]+@+[a-zA-Z0-9.%+-]\.[a-z][2,3]"
				 placeholder="name@gmail.com" required><br/>
				Address:<br/>
				<textarea name="address" rows="5" cols="50" required></textarea><br/><br/>
                Project Type: <br/>
				<input type="text" name="pr_id" placeholder="Project Type" required><br/>
				<input type="checkbox" id="checkbox" onclick="enableButton()"> 
				Accept Terms and Conditions<br/>
                <button type="submit" id="submitBtn" name='submit'  disabled><span></span>Submit</button>

			 </fieldset>
             </form>
			 </center>
         </div>					  
  </body>
</html>