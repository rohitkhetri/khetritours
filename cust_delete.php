<?php
include 'database.php';

$que = "SELECT * FROM `customers`";
$result = mysqli_query($db, $que);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Delete Data From Database in PHP</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  
</head>

<body>
  <!-- <div class="header">
    <h1><a href="cust_delete.php" onclick="myFunction(document.getElementById(this.id))">Customers</a></h1>
    <h1><a href="adminpack_book.php" onclick="myFunction(document.getElementById(this.id))">Cabs Bookings</a></h1>
    <h1><a href="admin_roomreserv.php" onclick="myFunction(document.getElementById(this.id))">Hotel reservation.</a>
    </h1>
    <h1><a href="managehotel1.php" onclick="myFunction(document.getElementById(this.id))">Hotels</a></h1>
    <h1><a href="manageinfo1.php" onclick="myFunction(document.getElementById(this.id))">Add Place Information</a></h1>
    <h1><a href="admin_cabbook.php" onclick="myFunction(document.getElementById(this.id))">Package Bookings</a></h1>
  </div> -->

  <h3 class="heading-title"> Customer Information. </h3>
  <div class="box">
    <table border="5" cellspacing="5" cellpadding="5">
      <tr class="center">
        <th>Sl No</th>
        <th>ID</th>
        <th>Customer Name</th>
        <th>Customer Password</th>
        <th>Customer Email</th>
        <th>Customer Country</th>
        <th>Customer Phone</th>
        <th>Operation</th>
      </tr>
      <?php
      $i = 1;
      if ($num = mysqli_num_rows($result) > 0) {
        while ($run = mysqli_fetch_assoc($result)) {
          echo "  
                                 <tr class='data'>  
                                    <td>" . $i++ . "</td>  
                                    <td>" . $run['customer_id'] . "</td></br>
                                    <td>" . $run['customer_name'] . "</td>  
                                    <td>" . $run['customer_password'] . "</td>  
                                    <td>" . $run['customer_email'] . "</td>  
                                    <td>" . $run['customer_country'] . "</td>  
                                    <td>" . $run['customer_phone'] . "</td>  
                                    <td><a href='delete.php?id=" . $run['customer_id'] . "' id='btn'>Delete</a></td>  
                                </tr>  
                            ";
        }
      }
      ?>
    </table>
  </div>
  </br><a id="a6" href="admin.php" onclick="myFunction(document.getElementById(this.id))">Back</a>
  </div>
</body>

</html>