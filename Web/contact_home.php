<?php 
require_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
    <link rel="stylesheet" href="contact_home.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
    </style>
</head>
<body>
    <div class="container">
        <form action="add_connection.php" method="post">
            <h1>Contact Us Form</h1>
            <input type="text" name="Name" placeholder="Name" required>
            <input type="text" name="lastName" placeholder="Last Name" required>
            <input type="email"  name="email" placeholder="email" required>
            <input type="text" name="contact_Number"placeholder="contact_Number" required>
            <h4>Type your massage here...</h4>
            <textarea name="message"required></textarea>
            <input type="submit" value="Send" id="button" name="submit">
        </form>
    </div>
</body>
<?php

 require_once "footer.php";
?>
</html>

