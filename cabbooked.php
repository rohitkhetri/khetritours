<?php

// Connect to the database

include("database.php");
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the customer details from the form
//   $booking_id = $_POST["booking_id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $car_id = $_POST["car_id"];
  $booking_date = date("Y-m-d H:i:s");
  $passengers=$_POST["passengers"];
  $pstreet=$_POST['pstreet'];
  $pcity=$_POST['pcity'];
  $dstreet=$_POST['dstreet'];
  $dcity=$_POST['dcity'];

  // Insert the booking into the database
  $query = "INSERT INTO carbookings (`booking_id`,`name`,`email`,`phone`,`car_id`,`booking_date`,`passengers`,`pstreet`,`pcity`,`dstreet`,`dcity`) VALUES (0,'$name', '$email', '$phone', '$car_id', '$booking_date',
  '$passengers','$pstreet','$pcity','$dstreet','$dcity')";
  mysqli_query($db, $query);

  // Redirect the customer to the booking confirmation page
  header("Location: confirmation.php");
  exit;
}