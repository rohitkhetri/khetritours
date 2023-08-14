<?php
// Establish a connection to the database
// $servername = "localhost";
// $username = "admin";
// $password = "password";
// $dbname = "myDB";

// $conn = new mysqli($servername, $username, $password, $dbname);
include("database.php");
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Retrieve the updated data from the form
$id = $_POST['id'];
$pname = $_POST['pname'];
$pdescription = $_POST['pdescription'];
$pi_main = $_POST['pi_main'];
$pi1 = $_POST['pi1'];
$pi2 = $_POST['pi2'];
$pi3 = $_POST['pi3'];
$package = $_POST['package'];

// Update the data in the database
$sql = "UPDATE information SET pname='$pname', pdescription='$pdescription', pi_main='$pi_main' WHERE id=$id";

if ($db->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $db->error;
}

// Close the connection to the database
$db->close();
?>
