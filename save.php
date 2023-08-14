<?php

$con=mysqli_connect('localhost:3306','root','','khetridb');

$firstname=$_POST['customer_name'];
$password = $_POST['customer_password'];
$email=$_POST['customer_email'];
$phone=$_POST['customer_phone'];
$address=$_POST['customer_address'];
$country=$_POST['customer_country'];
// $password = $_POST['customer_password'];

$sql="INSERT INTO `customers`(`customer_id`,`customer_name`,`customer_password`,`customer_email`,`customer_phone`,`customer_address`,`customer_country`) VALUES (0,'$firstname','$password','$email','$phone','$address','$country')";
$result = mysqli_query($con,$sql);

if($result)
{
	if($firstname=="admin" && $password == "ad123"){
		header("location:admin.php");

	}
	else{
		header("location:mainPage.html");
	}
}
else{
	$que = "SELECT `customer_name` FROM `customers` WHERE customer_name='$firstname'";
	$result = mysqli_query($con,$que);
	if($result){
		?>
		<script type="text/javascript">
			alert("username already taken")
		</script>
		<?php
	}
}

?>