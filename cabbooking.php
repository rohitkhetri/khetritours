<!-- <?php
$con=mysqli_connect('localhost:3306','root','','khetridb');

if (isset($_POST['cabbooked'])) {
  $firstname=$_POST['customer_name'];
  $que = "SELECT `customer_name` FROM `customers` WHERE customer_name='$firstname'";
  if($que){
    ?>
    
    <?php
  }
}
?>

<?php

// Connect to the database
include("database.php");
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the car ID from the form
  $car_id = $_POST["car_id"];

  // Retrieve the details of the selected car
  $query = "SELECT * FROM cars WHERE car_id = $car_id";
  $result = mysqli_query($db, $query);
  $car = mysqli_fetch_assoc($result);

  // Process the booking
  // ...
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Book a Car</title>
  <style>
    /* .header {
      text-align: center;
      background-color: lightblue;
      padding: 20px;
    }
    .header img {
      height: 100px;
    }
    .form {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
    }
    .form label {
      margin-bottom: 10px;
    }
    .form input[type="text"], .form input[type="email"], .form input[type="tel"] {
      width: 60%;
      padding: 10px;
      font-size: 16px;
      margin-bottom: 20px;
    }
    .form input[type="submit"] {
      width: 20%;
      padding: 10px;
      font-size: 16px;
      background-color: lightblue;
      color: white;
      border: none;
    }
    .form input[type="submit"]:hover {
      cursor: pointer;
      background-color: blue;
    } */
  </style>
</head>
<body>
  <div class="header">
    <img src="logo.png" alt="Cab Booking Logo">
    <h1>Welcome to Cab Booking</h1>
  </div>
  <div class="form">
    <h2>Book a Car</h2>
    <!-- 

    <input type="hidden" name="car_id" value="<?php echo $car_id; ?>"> -->
    <!DOCTYPE html>
<html>
<head>
<title>Car Booking Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/carbooking.css">
</head>
<body>
<div class="container1">
  <center><h2>Car Booking Form</h2></center>

  <form action="cabbooked.php" method="post">
  <input type="hidden" name="car_id" value="<?php echo $car_id; ?>"


  <div class="row">
      <div class="col-50"> 
      <input type="hidden" name="car_id" value="<?php echo $car_id; ?>"

    </div>


    <div class="row">
      <div class="col-50"> 
      <input type="text" id="name" name="name" placeholder="Full Name" required/>
    </div>
    <div class="col-50"> 
      <input type="email" id="email" name="email" placeholder="Email Address" required/>
    </div>
  </div>
  <div class="row">
  <div class="col-50">
    <input type="number" id="phone" name="phone" placeholder="Phone Number" required />
  </div>
  </div>
  <div class="row">
    &nbsp; &nbsp;&nbsp;<label for="booking">Booking Details</label></div>
   <div class="row">
    <div class="col-50">
      
      <input type="number" id="passengers" name="passengers" placeholder="No Of Passenger" />
    </div>

   </div>
    <div class="row"> 
      <div class="col-50">
      <textarea name="pstreet" id="pstreet" placeholder="Pick Up Street Address" rows="4" required></textarea>
    </div>
  </div>
   <div class="row">
    
    <div class="col-50">
      <input type="text" id="pcity" name="pcity" placeholder="Pick Up City" />
    </div>
   </div>
    <div class="row">
      <div class="col-50">
        <label>Destination Address</label>
        <textarea name="dstreet" id="dstreet" placeholder="Destination Street" rows="4" required></textarea>
      </div>
    </div>
    <div class="row"><div class="col-50">
      <input type="text" id="dcity" name="dcity" placeholder="Destination City" >
    </div>
    
  </div>
      <center><input type="submit" value="Submit" class="btn"></center>
  </form>
</div>
</body>
</html>