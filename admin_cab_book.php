<?php
include 'database.php';
$que = "SELECT * FROM `carbookings`";
$result = mysqli_query($db, $que);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <style>
    table,
    td,
    th {
      border: 1px solid black;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    .center {
      margin-left: auto;
      margin-right: auto;
    }

    td {
      text-align: center;
    }

    body {
      background-color: azure;
    }
  </style>
</head>

<body>
  <h1 class="heading-title"> Cabs Bookings </h1>
  <table border="5" cellspacing="5" cellpadding="5">
    <tr class="center">
      <th>Sl No</th>
      <th>ID</th>
      <th>Customer Name</th>
      <th>Customer Email</th>
      <th>Customer Phone</th>
      <th>Number of Passengers</th>
      <th>car_id</th>
      <th>booking_date</th>
      <th>pstreet</th>
      <th>pcity</th>
      <th>dstreet</th>
      <th>dcity</th>
    </tr>
    <?php
    $i = 1;
    if ($num = mysqli_num_rows($result) > 0) {
      while ($run = mysqli_fetch_assoc($result)) {
        echo "  
                                 <tr class='data'>  
                                    <td>" . $i++ . "</td>  
                                    <td>" . $run['booking_id'] . "</td>
                                    <td>" . $run['name'] . "</td>  
                                    <td>" . $run['email'] . "</td>  
                                    <td>" . $run['phone'] . "</td>  
                                    <td>" . $run['passengers'] . "</td>  
                                    <td>" . $run['car_id'] . "</td>  
                                    <td>" . $run['booking_date'] . "</td>  
                                    <td>" . $run['pstreet'] . "</td>  
                                    <td>" . $run['pcity'] . "</td>  
                                    <td>" . $run['dstreet'] . "</td>  
                                    <td>" . $run['dcity'] . "</td>  
                                    <td><a href='delete.php?id=" . $run['booking_id'] . "' id='btn'>Delete</a></td>  
                                </tr>  
                            ";
      }
    }
    ?>
  </table>
</div>
</br>
<a id="a6" href="admin.php" onclick="myFunction(document.getElementById(this.id))">Back</a>
</div>
</body>
</html>