<?php
$con = mysqli_connect('localhost:3306', 'root', '', 'khetridb');

if (isset($_POST['signup'])) {
  $firstname = $_POST['customer_name'];
  $que = "SELECT `customer_name` FROM `customers` WHERE customer_name='$firstname'";
  if ($que) {
?>
    <script type="text/javascript">
      alert("username already taken")
    </script>
<?php
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title> Sign Up Form </title>
  <meta name="viewport" content="width= device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>

<body>

  <form from="myForm" action="save.php" method="POST">
    <div class="login-box">

      <h1> Sign Up </h1>

      <div class="textbox">
        <input type="text" placeholder="Username" id="customer_name" name="customer_name" value="" required>
      </div>

      <div class="textbox">
        <input type="password" placeholder="Password" id="customer_password" name="customer_password" value="" maxlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="password must cantain at least one number and one uppper case and one lowercase letter and 8 characters" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Email" id="customer_email" name="customer_email" value="" required pattern="[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-z0-9-]+.[a-z]{2,4}" title="Invalid Email">
      </div>

      <div class="textbox">
        <input type="text" placeholder="Phone" id="customer_phone" name="customer_phone" value="" required onkeypress="return /[0-9]/i.test(event.key)" maxlength="10" pattern="([0-9]){10,}">
      </div>

      <div class="textbox">
        <input type="text" placeholder="Address" id="customer_address" name="customer_address" value="" required>
      </div>

      <div class="textbox">
        <input type="text" placeholder="Country" id="customer_country" name="customer_country" value="" required>
      </div>

      <input class="btn" type="submit" name="" value="Sign Up"> <br> <br>

      <center> <a href="index.html"> Already have an account ? </a>
        <center>

    </div>

  </form>

</body>

</html>