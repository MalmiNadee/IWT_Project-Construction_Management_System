<?php
require "connect.php";//to connet database

//add values to the table

if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['contact_Number'];
    $text = $_POST['message'];

$add_sql = "INSERT INTO contact(Name,Lastname,Email,Con_Number,Message,Date_Time) VALUES ('$name','$lastName','$email','$phoneNumber','$text',NOW())";

if ($conn->query($add_sql)) {
    echo "Data inserted successfully";
}
else{ 
    echo "Error:"  . $add_sql . "<br>" . $conn->error;
}
}

//close the connection
$conn->close();

?>