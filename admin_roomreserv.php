<?php
include("database.php");
$que = "SELECT * FROM hotel_guest";
$result = mysqli_query($db, $que);
?>
<!DOCTYPE html>
<html>
<head>
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

        center {
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
    <h1 class="heading-title"> Hotel Reservation Bookings </h1>
    <table border="5" cellspacing="5" cellpadding="5">
        <tr class="center">
            <th>No.</th>
            <th>ID</th>
            <th>FirstName</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Room Type</th>
            <th>Check In</th>
            <th>Check Out</th>
        </tr>
        <?php
        $i = 1;
        if ($num = mysqli_num_rows($result) > 0) {
            while ($run = mysqli_fetch_assoc($result)) {
                echo "
                        <tr class='data'>
                        <td>" . $i++ . "</td>
                        <td>" . $run['guest_id'] . "</td>
                        <td>" . $run['firstname'] . "</td>
                        <td>" . $run['lastname'] . "</td>
                        <td>" . $run['address'] . "</td>
                        <td>" . $run['contactno'] . "</td>
                        <td>" . $run['room_type'] . "</td>
                        <td>" . $run['check_in'] . "</td>
                        <td>" . $run['check_out'] . "</td>
                        <td><a href='delete_guest.php?id=" . $run['guest_id'] . "' id='btn'>Delete</a></td>  

                        </tr>
                        ";
            }
        }
        ?>
    </table>
    </br><a id="a6" href="admin.php" onclick="myFunction(document.getElementById(this.id))">Back</a>
</body>
</html>