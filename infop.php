
<?php
include_once('database.php');
// $que="SELECT * FROM `customer`";
// $result = mysqli_query($db, $que);
// $que1="SELECT * FROM `travel_agent`";
// $result1 = mysqli_query($db, $que1);
$que2="SELECT * FROM `information`";
$result2 = mysqli_query($db, $que2);
// $que3="SELECT * FROM `hotels`";
// $result3 = mysqli_query($db, $que3);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<title>Admin Page</title>
	<style>
		.container .addp-workspace{
			width: 70vw;
			height: 80vh;
			float: left;
		}
		.container .addp-workspace .insert-pform{
			display: none; 
			width: 30vw;
			height: 50vh;
			margin: 10% 30%;
			text-align: center;
		}
		.container .addp-workspace .insert-pform input{
			margin: 20px 0px;
		}
	</style>
</head>
<body>
        <div class="places-workspace work" id="id3">
			<!-- <div class="btn-tag" id="plc-op">
				<button type="button" id="v3" onclick="showDetails(document.getElementById(this.id))">view place detailes</button>
				<button type="button" id="i2" onclick="insertMenu(document.getElementById(this.id))">Insert place</button>
				<button type="button" id="b3" onclick="deleteMenu(document.getElementById(this.id))">Delete place</button>
			</div> -->
			<div id="place-container" style="display: none; margin-top: 50px;">
				<table align="center" border="1px" style="width: 500px; line-height: 30px;">
					<tr>
						<th colspan="3"><h2>Place Details</h2></th>
					</tr>
					<tr>
						<th>Id</th>
						<th>Place Name</th>
						<th>City</th>
					</tr>
					<?php
						while($rows2 = mysqli_fetch_assoc($result2))
						{
					?>
					<tr>
						<td><?php echo $rows2['pid']; ?></td>
						<td><?php echo $rows2['pname']; ?></td>
						<td><?php echo $rows2['pcity']; ?></td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
			<div class="insert-form" id="ins-form2">
				<form method="POST" action="admin_op.php">     
					<input type="text" name="pid" placeholder="place ID" required><br>
					<input type="text" name="pname" placeholder="Place name" required><br>
					<input type="text" name="pcity" placeholder="City" required><br>
					<input type="submit" value="Insert" class="submit" name="ins-submit-p">
				</form>
			</div>
			<div class="delete-form" id="del-form3">
				<form method="POST" action="admin_op.php">     
					<input type="text" name="pid" placeholder="place ID" required><br>
					<input type="text" name="pname" placeholder="Place name" required><br>
					<input type="submit" value="Delete" class="submit" name="de-submit-p">
				</form>
			</div>
		</div>
                    <!-- </div> -->
                </body>