<?php

include("database.php");

// Check if the connection was successful
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the ID of the data to be deleted from the URL query string
$id = $_GET['id'];

// Construct the SQL DELETE statement
$sql = "DELETE FROM hotel_guest WHERE guest_id = $id";

// Execute the SQL statement
if (mysqli_query($db, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($db);
}

// Close the database connection
mysqli_close($db);

?>