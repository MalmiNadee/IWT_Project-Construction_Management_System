<?php
  include "connect.php";

    //Database Connection
if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['submit']))
{
if(isset($_POST['cid']) && isset($_POST['name']) && isset($_POST['pay'] ) && isset($_POST['amount'] ) && isset($_POST['day'] ) ){
$customer_id=$_POST['cid'];
$customerName=$_POST['name'];
$payMethod=$_POST['pay'];
$payAmount=$_POST['amount'];
$payDate=$_POST['day'];

$sql="Insert into payment (customer_id,customerName,payMethod,payAmount,payDate) 
Values ('$customer_id','$customerName','$payMethod','$payAmount','$payDate')";

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

  $sql= "SELECT * FROM payment";

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
    <title>Payment Page</title>
  </head>
  <body>
       <div class="backg"><br/><br/>
       <h3>Payment Details</h3>
       <button type="button" onclick="window.location.href='Payment.php'"><span></span>Back to Form</button>
       <br/>
       <table class="tableS">
        <thead>
         <tr>
            <th>id</th>
            <th>customer_id</th>
            <th>customer_name</th>
            <th>payMethod</th>
            <th>payAmount</th>
            <th>payDate</th>
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
                    <td><?php echo $row['payment_id']; ?></td>
                    <td><?php echo $row['customer_id']; ?></td>
                    <td><?php echo $row['customerName']; ?></td>
                    <td><?php echo $row['payMethod']; ?></td>
                    <td><?php echo $row['payAmount']; ?></td>
                    <td><?php echo $row['payDate']; ?></td>
                    <td><a class="deleteB" href="PaymentDelete.php?payment_id=<?php echo $row['payment_id'];?>">Delete</a></td>
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