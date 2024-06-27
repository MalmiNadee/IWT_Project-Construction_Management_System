<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
    <style>
       * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background:white;
}
table{
    width:90%;
    
}
table,tr,td,th{
    border:1px solid gray;
    border-collapse:collapse;
    height:40px;
    font-size:20px;
}
th{
    width:500px;
    height:30px;
    background:black;
    color:white;
    
}
td{
    text-align:center;
}

        </style>
    
</head>
<body>

        
        
    
        

<?php
       require ('connect.php');
    ?>
    <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Delete</th>
            <th>Update</th>
            

        </tr>
</thead>
<tbody>
<?php
        include 'connect.php';
        $pic = mysqli_query($conn,"SELECT * FROM `crudtable`");
        while($row = mysqli_fetch_array($pic)){
        echo "
            <tr>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[password]</td>
                <td><a href='delete2.php? Id=$row[id]'class='btn btn-danger'><img src='img1.jpg' alt='Delete' style='width:35px;height:35px;'></a></td>
                <td><a href='update2.php? Id=$row[id]'class='btn btn-danger'><img src='img2.png' alt='Update' style='width:30px;height:30px;'></a></td>
                
                
                
                

                
                
       
                
            </tr>";
        }
        
        ?>
        </tbody>
    </table>
</body>
</html>