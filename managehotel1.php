<!DOCTYPE html>
<?php
include("database.php");
	// require_once 'validate.php';
	// require 'name.php';
?>
<html lang = "en">
	<head>
		<title>Hotel.</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<!-- <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " /> -->
		<!-- <link rel = "stylesheet" type = "text/css" href = "css/style1.css" /> -->
		<style>
table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 2px solid #ddd;
}

tr:hover {background-color: grey;}
</style>
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
			<h1 class="heading-title"> Online Hotel Reservation. </h1>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<!-- <li class = "dropdown"> -->
					<!-- <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a> -->
					<!-- <ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul> -->
				<!-- </li> -->
			</ul>
		</div>
	</nav>
	
	
	<div class = "home-packages">
		<div class = "content">
			<div class = "about">
				<!-- <div class = "alert alert-info">Room</div> -->

				<a class = "btn btn-success" href = "add_room.php"><i class = "glyphicon glyphicon-plus"></i> Add Room</a>
			</div>
				<table id = "table" class = "center">
					<thead>
						<tr>
							<th>Room Type</th>
							<th>Price</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$query = $db->query("SELECT * FROM `room`") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>	
						<tr>
							<td><?php echo $fetch['room_type']?></td>
							<td><?php echo $fetch['price']?></td>
							<td><center><img src = "photo/<?php echo $fetch['photo']?>" height = "50" width = "50"/></center></td>
							<td><center><a class = "btn btn-warning" href = "edit_room.php?room_id=<?php echo $fetch['room_id']?>"><i class = "glyphicon glyphicon-edit"></i> Edit</a></br> <a class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "delete_hotel.php?room_id=<?php echo $fetch['room_id']?>"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center></td>
						</tr>
					<?php
						}
					?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
	</br><a id="a6" href="admin.php" onclick="myFunction(document.getElementById(this.id))">Back</a>

</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>

<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
</html>