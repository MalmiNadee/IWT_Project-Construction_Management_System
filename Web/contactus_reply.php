<?php 
require "add_connection.php";//add values to the table
require "connect.php";
// Get data from table
$select_sql = "SELECT * FROM contact";
$result = $conn->query($select_sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="contactus.css"> 
</head>
<body>
   <section class="sect" >
    
    <h1 class="contactus_h1">Contact Data</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Message</th>
            <th>Date and Time</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output the data in table rows
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['LastName'] . "</td>";
                echo "<td><a href='mailto:" . $row['Email'] . "'>" . $row['Email'] . "</a></td>";
                echo "<td>" . $row['Con_Number'] . "</td>";
                echo "<td>" . $row['Message'] . "</td>";
                echo "<td>" . $row['Date_Time'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No data found in the table.</td></tr>";
        }
        ?>
    </table>
</section>

</body>
</html>

<?php
// Close the connection
$conn->close();
?>