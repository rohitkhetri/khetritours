<!DOCTYPE html>
<html>

<head>
   <title>Cab Booking</title>

   </style>
   <link rel="stylesheet" href="css/style1.css">

</head>

<body>
   <section class="header">

      <a href="home.php" class="logo">Khetri Tours.</a>

      <nav class="navbar">
         <a href="mainPage.html">home</a>
         <a href="about.php">about</a>
         <a href="package.php">package</a>
         <a href="gallery.html">Gallery</a>
         <a href="feedback.html">Feedback</a>
         <a href="index.html">Logout</a>
      </nav>

   </section>


   <section class="home-packages">

      <h1 class="heading-title"> our cabs </h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/car1.jpeg" alt="">
            </div>
            <div class="content">
               <h3>WagonR</h3>
               <p>Comfortable Car.
               </p>
               <p>Price Per Day:₹2500</p>
               <p>Price Per KM:₹12</p>
               <form action="cabbooking.php" method="post">
                  <input type="hidden" name="car_id" value="1">
                  <input type="submit" class="btn" value="Book Now">
               </form>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/car5.jpeg" alt="">
            </div>
            <div class="content">
               <h3>Ertiga</h3>
               <p>Ertiga car rental for Outstation Travel : Rent Ertiga SUV cabs for Outstation travel from anywhere. We best deal packages and economic high running kms package for your travel needs.</p>
               <p>Price Per Day:₹3500</p>
               <p>Price Per KM:₹15</p>
               <form action="cabbooking.php" method="post">
                  <input type="hidden" name="car_id" value="2">
                  <input type="submit" class="btn" value="Book Now">
               </form>
               <!-- <a href="bookingform.html" class="btn">Book Now</a> -->
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/car3.jpeg" alt="">
            </div>
            <div class="content">
               <h3>Swift</h3>
               <p>Price Per Day:₹3000</p>
               <p>Price Per KM:₹15</p>
               <form action="cabbooking.php" method="post">
                  <input type="hidden" name="car_id" value="3">
                  <input type="submit" class="btn" value="Book Now">
               </form>
            </div>
         </div>

      </div>
      </div>
   </section>

   <!-- footer section starts here -->

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
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         </div>

      </div>
   </section>
</body>

</html>