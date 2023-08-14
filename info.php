<?php
include_once('database.php');
if(isset($_POST['goa'])) {
	$que="SELECT * FROM `information` WHERE pname='Goaa'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['kerala'])) {
	$que="SELECT * FROM `information` WHERE pname='Keralaaaa '";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['pune'])) {
	$que="SELECT * FROM `information` WHERE pname='pune'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['ratnagiri'])) {
	$que="SELECT * FROM `information` WHERE pname='ratnagiri'";
	$result = mysqli_query($db, $que);
}
// if(isset($_POST['agra'])) {
// 	$que="SELECT * FROM `information` WHERE pname='Taj Mahal'";
// 	$result = mysqli_query($db, $que);
// }
if(isset($_POST['india_gate'])) {
	$que="SELECT * FROM `information` WHERE pname='India Gate'";
	$result = mysqli_query($db, $que);
}
// if(isset($_POST['hampi'])) {
// 	$que="SELECT * FROM `information` WHERE pname='Hampi'";
// 	$result = mysqli_query($db, $que);
// }
// if(isset($_POST['rajasthan'])) {
// 	$que="SELECT * FROM `information` WHERE pname='Rajasthan'";
// 	$result = mysqli_query($db, $que);
// }
// if(isset($_POST['manali'])) {
// 	$que="SELECT * FROM `information` WHERE pname='Manali'";
// 	$result = mysqli_query($db, $que);
// }
// if(isset($_POST['srinagar'])) {
// 	$que="SELECT * FROM `information` WHERE pname='Srinagar'";
// 	$result = mysqli_query($db, $que);
// }
// if(isset($_POST['amritsar'])) {
// 	$que="SELECT * FROM `information` WHERE pname='Amritsar'";
// 	$result = mysqli_query($db, $que);
// }
// if(isset($_POST['jogfalls'])) {
// 	$que="SELECT * FROM `information` WHERE pname='Jog Falls'";
// 	$result = mysqli_query($db, $que);
// }
// if(isset($_POST['search_p'])) {
// 	$search = $_POST['search_p'];
// 	$que="SELECT * FROM `information` WHERE pname='$search'";
// 	$result = mysqli_query($db, $que);
// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>Information</title>
</head>
<body>
<section class="header">

<a href="mainPage.html" class="logo">Khetri Tours.</a>

<nav class="navbar">
   <a href="mainPage.html">home</a>
   <a href="about.php">about</a>
   <a href="package.php">package</a>
   <!-- <a href="book.php">book</a> -->
   <a href="gallery.html">Gallery</a>
   <a href="feedback.html">Feedback</a>
   <a href="cabs.php">cabs</a>
   <a href="index.html">Logout</a>
   <!-- <a href="loginform.php">login</a> -->
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>
	<!-- <div class="main">
	    <ul>
	      <ul class="list">
	        <li class="logo"><a href="mainPage.html"><img src="earth-globe.png" alt="Logo" style="width:36px;height:36px"></a></li>
	        <div class="search">
                <form method="POST" action="info.php">
                  <input type="text" name="search_p" placeholder="Search.." size="50">
              
                  <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
                </form>
            </div>
	      </ul>
	      <ul class="list2">
	        <li><a href="mainPage.html">Home</a></li>
	        <li><a id="long" href="destination.html">Destination</a></li>
	        <li><a href="gallery.html">Gallery</a></li>
			<li><a href="feedback.html">Feedback</a></li>
			<li><a href="index.html">Logout</a></li>
	      </ul>
	    </ul>
	</div> -->
    <section class="packages">

	<div class="heading-title">
		<h1>Place Information</h1>
	</div>
	<div class="box-container">
		<div class="box">
				<?php
					while($rows = mysqli_fetch_assoc($result))
					{
				?>
                <div class="">
				<img src="<?php echo $rows['pi_main']; ?>" alt="Taj Mahal Image" style="width:auto; height: auto;">
                </div>
			<div class="content">
				<h1><?php echo $rows['pname']; ?><h1>
				<p style="text-align: justify;"><?php echo $rows['pdescription']; ?></p>
				<p style="color:red; top: -10px;" >Package: <?php echo $rows['package']; ?> Rs</p>
			<a href="booking.html" class="btn">Book Tour</a>
		</div>
		<div class="image-container" style="border: 1px solid black">
			<div class="box">
		        <div class="imgBox">
		          <img src="<?php echo $rows['pi1']; ?>"  style="width: auto;height: 270px;">
		        </div>
	        </div>
	      <div class="box">
	        <div class="imgBox">
	          <img src="<?php echo $rows['pi2']; ?>" alt="Taj Mahal Image" style="width: auto;height: 270px;">
	        </div>
	      </div>
	      <div class="box">
	        <div class="imgBox">
	          <img src="<?php echo $rows['pi3']; ?>" alt="Taj Mahal Image" style="width: auto;height: 270px;">
	        </div>
	        	<?php
					}
				?>
	      </div>
		</div>
	</div>
    </section>

    <section class="home-packages">

   <h1 class="heading-title"> Hotel. </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/Ganpatipule_Temple.jpg" alt="">
         </div>
         <div class="content">
            <h3>Reserve a hotel.</h3>
            <a href="hotel_reservation.php" class="btn">Reservation hotel.</a>
         </div>
      </div>

            
     </div>

   <div class="load-more"> <a href="hotel_reservation.php" class="btn">load more</a> </div>

</section>

</body>
</html>

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="logout.php"> <i class="fas fa-angle-right"></i> Logout</a>
         <!-- <a href="bookingform.html"> <i class="fas fa-angle-right"></i> book</a> -->
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