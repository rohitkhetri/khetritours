<?php

$db = mysqli_connect('localhost:3306','root','','khetridb');

$username = $_POST["user"];
$password = $_POST["pass"];
$d = date("Y-m-d h:i:sa");
$i=0;
$usern = "";
$passd = "";

$que="INSERT INTO `login` (`user`,`pass`,`date_time`) VALUES ('$username','$password','$d')";

$sql="SELECT customer_name, customer_password FROM `customers` WHERE customer_name='$username' and customer_password='$password'";
$result2 = mysqli_query($db, $sql);

if(isset($_POST['submit'])){
	if($username == 'admin' and $password == 'ad123'){
		$result = mysqli_query($db, $que);
		header('location:admin.php');
	}
	elseif($result2) {
		while($rows = mysqli_fetch_assoc($result2) and $i==0)
		{

			$usern = $rows['customer_name'];
			$passd = $rows['customer_password'];
			$i= $i+1;
		}
		if ($usern==$username and $passd==$password) {
			$result = mysqli_query($db, $que);
			header("location:mainPage.html");
		}
		else{
			?>
			<script>
				alert("Invalid username or password");
			</script>
			<?php
		}
	}
}
?>