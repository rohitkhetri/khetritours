<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>

   <!-- swiper css link 
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="mainPage.html" class="logo">Khetri Tours.</a>

      <nav class="navbar">
         <a href="mainPage.html">home</a>
         <a href="about.php">about</a>
         <a href="cabs.php">Cabs</a>
         <a href="gallery.html">Gallery</a>
         <a href="index.html">Logout</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
      <h1>packages</h1>
   </div>

   <!-- packages section starts  -->

   <section class="packages">

      <h1 class="heading-title">top destinations</h1>

      <div class="box-container">
         <div class="box">
            <div class="image">
               <img src="images//destination//goa1.jpg" alt="Goa Image">
            </div>
            <div class="content">
               <h1>Goa</h1>
               <form method="POST" action="info.php">
                  <input type="submit" name="goa" class="btn" value="Visit">
               </form>
            </div>
         </div>
         <div class="box">
            <div class="image">
               <img src="images/Ganpatipule_Temple.jpg" alt="Russia Image">
            </div>
            <div class="content">
               <h1>Ratnagiri</h1>
               <form method="POST" action="info.php">
                  <input type="submit" name="ratnagiri" class="btn" value="Visit">
               </form>
            </div>
         </div>
      </div>
      </div>
      </br></br></br></br>
      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/indiagate.jpg" alt="">
            </div>
            <div class="content">
               <h3>India Gate</h3>
               <form method="POST" action="info.php">
                  <input type="submit" name="india_gate" class="btn" value="Visit">
               </form>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/pune.jpg" alt="">
            </div>
            <div class="content">
               <h3>pune</h3>
               <form method="POST" action="info.php">
                  <input type="submit" name="pune" class="btn" value="Visit">
               </form>
            </div>
         </div>
      </div>
      <div class="load-more"><span class="btn">load more</span></div>

   </section>

   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="bookingform.html"> <i class="fas fa-angle-right"></i> book</a>
            <a href="loginform.html"><i class="fas fa-angle-right"></i>login</a>
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
   <!-- footer section ends -->

   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>
</body>
</html>