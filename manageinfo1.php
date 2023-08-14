<!DOCTYPE html>
<?php
include("database.php");
?>
<html lang="en">

<head>
	<title></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
</head>

<body>
	<nav style="background-color:rgba(0, 0, 0, 0.1);" class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<h2 class="heading-title"> Online Hotel Reservation. </h2>
			</div>
		</div>
	</nav>
	<div class="home-packages">
		<div class="content">
			<div class="about">
				<a class="btn btn-success" href="add_info.php"><i class="glyphicon glyphicon-plus"></i> Add package</a>
			</div>
			<table id="table" class="center">
				<thead>
					<tr>
						<th>ID</th>
						<th>pname</th>
						<th>pdescription</th>
						<th>pi_main</th>
						<th>pi1</th>
						<th>pi2</th>
						<th>pi3</th>
						<th>package</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$query = $db->query("SELECT * FROM `information`") or die(mysqli_error());
					while ($fetch = $query->fetch_array()) {
					?>
						<tr>
							<td><?php echo $fetch['id'] ?></td>

							<td><?php echo $fetch['pname'] ?></td>
							<td><?php echo $fetch['pdescription'] ?></td>
							<td>
								<center><img src="<?php echo $fetch['pi_main'] ?>" height="50" width="50" /></center>
							</td>
							<td>
								<center><img src="image/<?php echo $fetch['pi1'] ?>" height="auto" width="auto" /></center>
							</td>

							<td>
								<center><img src="image/<?php echo $fetch['pi2'] ?>" height="50" width="50" /></center>
							</td>

							<td>
								<center><img src="image/<?php echo $fetch['pi3'] ?>" height="50" width="50" /></center>
							</td>

							<td><?php echo $fetch['package'] ?></td>
							<td>
								<center><a class="btn btn-warning" href="editinfo1.php?id=<?php echo $fetch['id'] ?>">Edit</a></br> <a class="btn btn-danger" onclick="confirmationDelete(this); return false;" href="delete_info.php?id=<?php echo $fetch['id'] ?>"></i> Delete</a></center>
							</td>
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
	</br><a href="admin.php" onclick="myFunction(document.getElementById(this.id))">Back</a>
</body>

</html>