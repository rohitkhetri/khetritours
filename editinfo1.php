<!DOCTYPE html>
<?php
	include("database.php");
?>
<html lang = "en">
	<head>
		<title></title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<!-- <link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" /> -->
	</head>
<body>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info"></div>
				<br />
				<div class = "col-md-4">
					<?php
						$query = $db->query("SELECT * FROM `information` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
					<form method = "POST" enctype = "multipart/form-data">
						<div class="form-group">
                            <label>Name</label>
                            <input type="text" name="pname"  value="<?php echo $fetch['pname']?>" class="form-control" name="pname"/>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="pdescription"  value="<?php echo $fetch['pdescription']?>" class="form-control" name="pdescription"/>
                        </div>
						<div class = "form-group">
							<label>Price </label>
							<input type = "number" min = "0" max = "999999999" value = "<?php echo $fetch['package']?>" class = "form-control" name = "package" />
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<input type = "file" value = "<?php echo $fetch['package']?>" class = "form-control" name = "pi_main" />
							<!-- <div style = "width:auto; height :auto;">
								<img src = "image//destination//<?php echo $fetch['pi_main']?>"/>
							</div>
							<input type = "file" required = "required" id = "pi_main" name = "pi_main" /> -->
						</div>
						<br />
						<div class = "form-group">
							<button name = "editinfo2" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
					<?php 
                    // require_once 'database.php';
					include("database.php");
					if(ISSET($_POST['editinfo2'])){
                        $pname = $_POST['pname'];
                        $pdescription = $_POST['pdescription'];
                        $pi_main = $_POST['pi_main'];

						// $pi_main = addslashes(file_get_contents($_FILES['pi_main']['tmp_name']));
                        // $photo_name = addslashes($_FILES['pi_main']['name']);
                        // $photo_size = getimagesize($_FILES['pi_main']['tmp_name']);
                        // move_uploaded_file($_FILES['pi_main']['tmp_name'],"images/" . $_FILES['pi_main']['name']);
						$package = $_POST['package'];
                        $db->query("UPDATE `information` SET `pname` = '$pname', `pdescription` = '$pdescription', `pi_main` = '$pi_main' , `package` = '$package' WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
                        header("location:manageinfo1.php");
                    }
                    ?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
</html>
