<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel.</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		
		<link rel="stylesheet" href="css/style1.css">

	</head>
<body>
<section class="header">

<a href="home.php" class="logo">Khetri Tours.</a>

<nav class="navbar">
   <a href="mainPage.html">home</a>
   <a href="about.php">about</a>
   <a href="package.php">package</a>
   <!-- <a href="book.php">book</a> -->
   <a href="gallery.html">Gallery</a>
   <a href="feedback.html">Feedback</a>
   <!-- <a href="cabs.html">cabs</a> -->
   <a href="index.html">Logout</a>
   <!-- <a href="loginform.php">login</a> -->
</nav>

<!-- <div id="menu-btn" class="fas fa-bars"></div> -->
</section>
<section class="home-packages">
	<h1 class="heading-title">Make Reservation.</h1>
			<div class = "box1">
			<div class = "">
				<?php
					require_once 'database.php';
					$query = $db->query("SELECT * FROM `room` ORDER BY `price` ASC") or die(mysql_error());
					while($fetch = $query->fetch_array()){
				?>
					<div class = "">
						<div class="image">
							<img src = "photo/<?php echo $fetch['photo']?>" height = "250" width = "350"/>
						</div></br>
					<!-- </div> -->
					<!-- <div class="box"> -->
						<div class="box">
							<h3><?php echo $fetch['room_type']?></h3>
							<h4 style = "text-align: justify;"><?php echo "Price: ".$fetch['price'].".00"?></h4>
							<a style = "margin-left:580px;" href = "add_reserve.php?room_id=<?php echo $fetch['room_id']?>" class = "btn btn-info"><i class = "glyphicon glyphicon-list"></i> Reserve</a>
						</div>
					<!-- </div> -->
					<!-- </div> -->
				<?php
					}
				?>
			</div>
		</div>

</section>
	<br />
	<br />
	
</body>
<section class="footer">

<div class="box-container">

   <div class="box">
	  <h3>quick links</h3>
	  <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
	  <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
	  <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
	  <a href="index.html"> <i class="fas fa-angle-right"></i> Logout</a>
   </div>

   <div class="box">
	  <h3>extra links</h3>
	  <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
	  <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
	  <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
	  <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
   </div>

   <div class="box">
	  <h3>contact info</h3>
	  <a href="#"> <i class="fas fa-phone"></i> +91 7823827959 </a>
	  <a href="#"> <i class="fas fa-envelope"></i> rohitkhetri@gmail.com </a>
	  <a href="#"> <i class="fas fa-map"></i> Ratnagiri, Maharashtra, India - 415612 </a>
   </div>

   <div class="box">
	  <h3>follow us</h3>
	  <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
	  <!-- <a href="#"> <i class="fab fa-twitter"></i> twitter </a> -->
	  <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
	  <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
   </div>

</div>

<!-- <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div> -->

</section>

</html>