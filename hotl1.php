<?php
include_once ('database.php');

// Insert or update hotel details
if (isset($_POST['submit'])) {
    $hotel_name = $_POST['hotel_name'];
    $hotel_location = $_POST['hotel_location'];
    $hotel_price = $_POST['hotel_price'];
    $hotel_rating = $_POST['hotel_rating'];
    $hotel_id = $_POST['hotel_id'];

    if (!empty($hotel_id)) {
        // Update hotel details
        $sql = "UPDATE hotels SET hotel_name='$hotel_name', hotel_address='$hotel_address', hotel_city='$hotel_city', hotel_rating='$hotel_rating' WHERE hotel_id=$hotel_id";
        if ($conn->query($sql) === TRUE) {
            echo "Hotel details updated successfully";
        } else {
            echo "Error updating hotel details: " . $db->error;
        }
    } else {
        // Insert hotel details
        $sql = "INSERT INTO hotels (hotel_name, hotel_address, hotel_city, hotel_rating,hotel_desciption)
        VALUES ('$hotel_name', '$hotel_address', '$hotel_city', '$hotel_rating','$hotel_desciption')";
        if ($db->query($sql) === TRUE) {
            echo "Hotel details inserted successfully";
        } else {
            echo "Error inserting hotel details: " . $conn->error;
        }
    }
}

$db->close();
?>

<html>
<head>
    <title>Insert and Update Hotel Details</title>
</head>
<body>
    <h1>Insert and Update Hotel Details</h1>
    <form method="post">
        <label for="hotel_name">Hotel Name:</label>
        <input type="text" id="hotel_name" name="hotel_name" required><br><br>
        <label for="hotel_location">Hotel address:</label>
        <input type="text" id="hotel_location" name="hotel_address" required><br><br>
        <label for="hotel_price">Hotel city:</label>
        <input type="text" id="hotel_price" name="hotel_city" required><br><br>
        <label for="hotel_rating">Hotel Rating:</label>
        <input type="text" id="hotel_rating" name="hotel_rating" required><br><br>
        <label for="hotel_rating">Hotel Description:</label>
        <input type="text" id="hotel_rating" name="hotel_desciption" required><br><br>
        <input type="hidden" id="hotel_id" name="hotel_id">
        <input type="submit" name="submit" value="Submit">
    </form
