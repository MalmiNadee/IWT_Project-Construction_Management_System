<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./signup.css">
    <title>Sign Up</title>
</head>
<body>
<?php
     require('connect.php');
     if(isset($_POST['signup_button'])){
        $Name=$_POST['Name'];
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $ConfirmPassword=$_POST['ConfirmPassword'];
        if(!empty($_POST['Name'])&&!empty($_POST['Email'])&&!empty($_POST['Password']));
        if($Password==$ConfirmPassword){
        //$p=mysqli_query('INSERT INTO crudtable(Name,Email,Password) VALUES(:n,:e,:p)');
        //$p->bindvalue(':n',$Name);
        //$p->bindvalue(':e',$Email);
        //$p->bindvalue(':p',$Password);
        $stmt = $conn->prepare('INSERT INTO crudtable(Name, Email, Password) VALUES (?, ?, ?)');
            $stmt->bind_param('sss', $Name, $Email, $Password);
            $stmt->execute();
        
        echo'Updated';
    
        }else{
            echo'Password does not match!';
        }
        

     }
    ?>
    <div class="form">
        <div class="title">
            <p>Sign Up Form</p>
        <form action="" method="post">
            <input type="text" name="Name" placeholder="Name">
            <input type="Email" name="Email" placeholder="Email">
            <input type="Password" name="Password" placeholder="Password">
            <input type="Password" name="ConfirmPassword" placeholder="ConfirmPassword">
            <input type="submit" value="UPDATE" name="signup_button">
        </form>
    </div>      
            
</body>
</html>