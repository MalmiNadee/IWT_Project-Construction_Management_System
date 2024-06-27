<?php
  include "connect.php";

    //Database Connection
if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['submit']))
{
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['gender'] ) && isset($_POST['mobile'] )
&& isset($_POST['dob'] ) && isset($_POST['mail'] ) && isset($_POST['address'] ) && isset($_POST['pr_id'] )){
$firstName=$_POST['fname'];
$lastName=$_POST['lname'];
$gender=$_POST['gender'];
$phoneNum=$_POST['mobile'];
$birthday=$_POST['dob'];
$email=$_POST['mail'];
$address=$_POST['address'];
$Project_id=$_POST['pr_id'];

$sql="Insert into customer (firstName,lastName,gender,phoneNum,birthday,email,address,Project_id) 
Values ('$firstName','$lastName','$gender','$phoneNum','$birthday','$email','$address','$Project_id')";

$query = mysqli_query($conn,$sql);
if($query)
{
echo "<script>alert('Details Entered Successfully')</script>";
}
else
{
die('Connection Failed : '.$conn->connect_error);
}
}
  
}

  $sql= "SELECT * FROM customer";

  $result = $conn->query($sql);

?>

<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Home.css">
	<link rel="stylesheet" type="text/css" href="User.css">
    <title>Submitted Form</title>
  </head>
  <body>
       <div class="backg">
       <br/><br/>
       <h3>User Details</h3> <br/>
       <button type="button" onclick="window.location.href='UserDetails.php'"><span></span>Back to Form</button>
       <br/>
       <table class="tableS">
        <thead>
            <tr>
                <th>id</th>
                <th>firstName</th>
                <th>lastName</th>
                <th>gender</th>
                <th>phoneNum</th>
                <th>birthday</th>
                <th>email</th>
                <th>address</th>
                <th>Project_id</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              if($result->num_rows>0)
              {
                while($row = $result->fetch_assoc())
                {

                ?>

                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['firstName'];?></td>
                    <td><?php echo $row['lastName'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['phoneNum'];?></td>
                    <td><?php echo $row['birthday'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['Project_id'];?></td>
                    <td><a class="updateB" href="UserUpdate.php?id=<?php echo $row['id']; ?>">
                    Edit</a>&nbsp;<a class="deleteB" href="UserDelete.php?id=<?php echo $row['id']; ?>">
                    Delete</a>
                </tr>
                <?php
                }
                $conn->close();
              }
              ?>
        </tbody>
       </table>
       </div>
    </body>
   </html>