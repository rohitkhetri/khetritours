<!-- <?php   
 include 'database.php';  
 $que = "select * from khetridb";  
 $run = mysqli_query($db,$query); 
 $que="SELECT * FROM `hotels`";
$result = mysqli_query($db, $que); 
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Delete Data From Database in PHP</title>  
      <link rel="stylesheet" type="text/css" href="css/admin1.css">  
 </head>  
 <body>  
 <header></header>  
 <div class="main">
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
			<li><a href="index.html">Logout</a></li>
	      </ul>
	    </ul>
	</div>
    <div class="container">
        <div class="header">
			<h1>Admin Page</h1>
		</div>
        
        <table border="1" cellspacing="0" cellpadding="0">  
            <tr class="heading">  
            <tr>
				<th>Id</th>
				<th>Hotel Name</th>
				<th>Phone</th>
				<th>City</th>
            </tr>  
            <?php   
            $i=1;  
                if ($num = mysqli_num_rows($result)>0) {  
                        while ($run = mysqli_fetch_assoc($result)) {  
                            echo "  
                                 <tr class='data'>  
                                <td>".$i++."</td>  
                                    <td>".$run['hotel_id']."</td>  
                                    <td>".$run['hotel_name']."</td>  
                                    <td>".$run['hotel_address']."</td>  
                                    <td>".$run['hotel_rating']."</td>  
                                    <td>".$run['hotel_description']."</td>  
                                    <td>".$run['hotel_image']."</td>  
                                    <td><a href='delete.php?id=".$run['hotel_id']."' id='btn'>Delete</a></td>  
                                </tr>  
                            ";  
                        }         
                    }  
            ?>  
        </table> 
    </div>
 </body>  
 </html> 








<div class="hotels-workspace work" id="id4">
			<div class="btn-tag" id="htl-op">
				<button type="button" id="v4" onclick="showDetails(document.getElementById(this.id))">view hotel detailes</button>
				<button type="button" id="i3" onclick="insertMenu(document.getElementById(this.id))">Insert hotel</button>
				<button type="button" id="b4" onclick="deleteMenu(document.getElementById(this.id))">Delete hotel</button>
			</div>
			<div id="hotel-container" style="display: none; margin-top: 50px;">
				<table align="center" border="1px" style="width: 500px; line-height: 30px;">
					<tr>
						<th colspan="4"><h2>Hotel Details</h2></th>
					</tr>
					<tr>
						<th>Id</th>
						<th>Hotel Name</th>
						<th>Phone</th>
						<th>City</th>
					</tr>
					<?php
						while($rows3 = mysqli_fetch_assoc($result3))
						{
					?>
					<tr>
						<td><?php echo $rows3['hid']; ?></td>
						<td><?php echo $rows3['hname']; ?></td>
						<td><?php echo $rows3['hphone']; ?></td>
						<td><?php echo $rows3['hcity']; ?></td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
			<div class="insert-form" id="ins-form3">
				<form method="POST" action="admin_op.php">     
					<input type="text" name="hid" placeholder="hotel ID" required><br>
					<input type="text" name="hname" placeholder="Hotel name" required><br>
					<input type="text" name="hphone" placeholder="Phone number" required><br>
					<input type="text" name="hcity" placeholder="City" required><br>
					<input type="submit" value="Insert" class="submit" name="ins-submit-h">
				</form>
			</div>
			<div class="delete-form" id="del-form4">
				<form method="POST" action="admin_op.php">     
					<input type="text" name="hid" placeholder="hotel ID" required><br>
					<input type="text" name="hname" placeholder="Hotel name" required><br>
					<input type="submit" value="Delete" class="submit" name="de-submit-h">
				</form>
			</div>
		</div> -->




		<?php   
 include 'database.php';  
//  $que = "select * from khetridb";  
//  $run = mysqli_query($db,$query); 
 $que="SELECT * FROM `customers`";
$result = mysqli_query($db, $que); 
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Delete Data From Database in PHP</title>  
      <link rel="stylesheet" type="text/css" href="css/admin1.css">  
 </head>  
 <body>  
 <!-- <header></header>   -->
 <div class="main">
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
			<li><a href="index.html">Logout</a></li>
	      </ul>
	    </ul>
	</div>
    <div class="container">
        <div class="header">
			<h1>Admin Page</h1>
		</div>
        
        <table border="1" cellspacing="0" cellpadding="0">  
            <tr class="heading">  
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
            $i=1;  
                if ($num = mysqli_num_rows($result)>0) {  
                        while ($run = mysqli_fetch_assoc($result)) {  
                            echo "  
                                 <tr class='data'>  
                                <td>".$i++."</td>  
                                    <td>".$run['customer_id']."</td>  
                                    <td>".$run['customer_name']."</td>  
                                    <td>".$run['customer_password']."</td>  
                                    <td>".$run['customer_email']."</td>  
                                    <td>".$run['customer_country']."</td>  
                                    <td>".$run['customer_phone']."</td>  
                                    <td><a href='delete.php?id=".$run['customer_id']."' id='btn'>Delete</a></td>  
                                </tr>  
                            ";  
                        }         
                    }  
            ?>  
        </table> 
    </div>
 </body>  
 </html> 