<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv ="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Home.css">
	<link rel="stylesheet" type="text/css" href="User.css">
	<script src="User.js"></script>
    <title>Register Page</title>
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
					 <button type="button" onclick="window.location.href='User.php'"><span></span>Back to Page</button>
             </div>
					  <center>
			 <form style="color:white" method="post" action="SubmitPayDetails.php">
			 <fieldset>
				<legend>Payment Details</legend>
				Customer id: <br/>
				<input type="text" name="cid" placeholder="Customer ID" required><br/><br/>
				Customer Name: <br/>
				<input type="text" name="name" placeholder="Name" required><br/><br/>
				Payment Method:<br/>
				<input type="radio" name="pay" value="paypal" >Paypal
				<input type="radio" name="pay" value="credit card">Credit Card<br/><br/>
				Payment Amount:<br/>
				<input type="text" name="amount" required><br/><br/>
				Payment Date:<br/>
                <input type="date" name="day" required><br/>
				<input type="checkbox" id="checkbox" onclick="enableButton()"> 
				Accept Payment Terms and Conditions<br/>
                <button type="submit" id="submitBtn" name="submit" disabled><span></span>Pay</button>

			 </fieldset>
             </form>
			 </center>
         </div>					  
  </body>
</html>