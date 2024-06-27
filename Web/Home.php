<?php
   include "header.php";
?>
<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Home.css">
    <title>Home Page</title>
  </head>
  <body>
            <div class="backg">
			  <script> 
		            document.write(Date());
              </script>
			  <br/><br/><br/>
			<div class="log">
		                 <button type="button" onclick="window.location.href='login.php';"><img src="favicon-16x16.png" alt="login icon" >
						 <span></span>Login</button>		 
		              </div>
					  <br/>
			     <div class="navg">
                     <ul>
	                   <li><a href="Home.php">Home</a></li>
		               <li><a href="project.php">Project</a></li>
		               <li><a href="about.php">About  Us</a></li>
		               <li><a href="contact_home.php">Contact Us</a></li>
		               <li><a href="FAQ.php">FAQs</a></li>
	                 </ul>
             </div>
				<div class="desc">
				     <h1>Design Your Dream</h1><br/><br/>
					 <p>MYC Construction Company <br/>is a trusted name in the industry,known for its commitment to quality and customer satisfaction.
              <br/> With a skilled team and a track record of successful projects</p>
					   <div>
					        <button type="button" onclick="window.location.href='WhatsApp Video 2023-05-28 at 15.49.23.mp4';" ><span></span>View more</button>	
						</div>
		      
				</div>	
           
		
		   </div>
        <?php include "footer.php";  ?>
       </body>
</html>
