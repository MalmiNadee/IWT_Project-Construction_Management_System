<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./signup.css">
    <title>Login</title>
    <style>
        .form{
            width:350px;
            height:400px;
        
            
        }
        .login-message1 {
    text-align:start;
    margin-top: 50px;
    font-size: 2px;
    color: #999;
}

.login-message1 a {
    color: blue;
    text-decoration: none;
    font-weight: bold;
}

.login-message1 a:hover {
    text-decoration: underline;
}


        
        
        </style>
</head>
<body>


    <?php
    require('connect.php');
    if(isset($_POST['login_button'])){
        $_SESSION['Validate']=false;
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        //$p=MyCrudClass::connect()->prepare(`SELECT*FROM crudtable WHERE Email=:e,Password=:p`);
       // $p->bindvalue(':e',$Email);
        //$p->bindvalue(':p',$Password);
        $stmt = $conn->prepare('SELECT*FROM crudtable WHERE Email=? AND Password=?');
        if($stmt){
            $stmt->bind_param('ss',  $Email, $Password);  
        }
           
       $stmt->execute();
       //$stmt->blind_param('sss',$Name,$Email,$Password);
      // $stmt->execute();
       // $d=$p->fetchAll(PDO::FETCH_ASSOC);
       $result=$stmt->get_result();
        if($result->num_rows>0){
            $_SESSION['Email']=$Email;
            $_SESSION['Password']=$Password;
            $_SESSION['Validate']=true;
            header("location:User.php");
            echo'Logged Sucessfuly!';
        }else{
            echo'Make Sure That You Are Register!';
        }

        



    }
   


?>
    <div class="form">
        <div class="title">
            <p>Login Form</p>
        <form action="" method="post">
           
            <input type="text" name="Email" placeholder="Email">
            <input type="Password" name="Password" placeholder="Password">
            
            <input type="submit" value="Login" name="login_button">
        </form>
        <p class="login-message1"> New Here? <a href="signup.php">Signup.</a></p>
        
    </div>      
            
</body>
</html>