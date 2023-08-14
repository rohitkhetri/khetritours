<?php   
 include 'database.php';  

$que="SELECT * FROM `bookings`";
$result = mysqli_query($db, $que); 
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title></title>  
      <style>
table, td, th {
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
</style>
 </head>  
 <body>  
 
			<h1 class="heading-title"> Package Bookings </h1>
	
          <table border="5" cellspacing="5" cellpadding="5">  
           <tr class="center">  
           <th>Sl No</th>  
           <th>ID</th>  
           <th>Customer Name</th>  
           <th>Customer Email</th>  
           <th>Customer Phone</th>  
           <!-- <th>booking_date</th>  -->
           <th>Number of people</th>
           <th>City</th>
           <th>Destination</th>     
            </tr>  
            <?php   
            $i=1;  
                if ($num = mysqli_num_rows($result)>0) {  
                        while ($run = mysqli_fetch_assoc($result)) {  
                            echo "  
                                 <tr class='data'>  
                                    <td>".$i++."</td>  
                                    <td>".$run['booking_id']."</td>
                                    <td>".$run['customer_name']."</td>  
                                    <td>".$run['customer_email']."</td>  
                                    <td>".$run['phone']."</td>  
                                      
                                    <td>".$run['number_of_people']."</td>  
                                    <td>".$run['city']."</td>  
                                    <td>".$run['destination']."</td>  
                                    <td><a href='delete1.php?id=".$run['booking_id']."' id='btn'>Delete</a></td>  
                                </tr>  
                            ";  
                        }         
                    }  
            ?>  
        </table> 
  </br><a id="a6" href="admin.php" onclick="myFunction(document.getElementById(this.id))">Back</a>
 </body>  
 </html> 