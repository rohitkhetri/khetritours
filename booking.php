<?php

$con=mysqli_connect('localhost:3306','root','','khetridb');
// $booking_id=$_POST['booking_id'];
$customer_name=$_POST['customer_name'];
$customer_email=$_POST['customer_email'];
$phone=$_POST['phone'];
// $booking_date=$_POST['booking_date'];
$number_of_people=$_POST['number_of_people'];
$city=$_POST['city'];

$destination=$_POST['destination'];


$sql="INSERT INTO `bookings`(`booking_id`,`customer_name`,`customer_email`,`phone`,`number_of_people`,`city`,`destination`) VALUES
 (0,'$customer_name','$customer_email','$phone','$number_of_people','$city','$destination')";
$result = mysqli_query($con,$sql);

if(isset($_POST['submit'])){
	header('location:confirmation_package.php');
}


?>