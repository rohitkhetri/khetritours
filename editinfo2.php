<!DOCTYPE html>
<?php
	include("database.php");
?>
<html lang = "en">
	<head>
		<title></title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
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
						<div class = "form-group">
							<label>Room Type </label>
							<!-- <select class = "form-control" required = required name = "room_type">
								<option value = "">Choose an option</option>
								<option value = "Standard" <?php if($fetch['room_type'] == "Standard"){echo "selected";}?>>Standard</option>
								<option value = "Superior" <?php if($fetch['room_type'] == "Superior"){echo "selected";}?>>Superior</option>
								<option value = "Super Deluxe" <?php if($fetch['room_type'] == "Super Deluxe"){echo "selected";}?>>Super Deluxe</option>
								<option value = "Jr. Suite" <?php if($fetch['room_type'] == "Jr. Suite"){echo "selected";}?>>Jr. Suite</option>
								<option value = "Executive Suite" <?php if($fetch['room_type'] == "Executive Suite"){echo "selected";}?>>Executive Suite</option>
							</select> -->
						</div>
                        <div class = "form-group">
							<label>Pname </label>
							<input type = "text" value = "<?php echo $fetch['pname']?>" class = "form-control" name = "pname" />
						</div>
                        <div class = "form-group">
							<label>description </label>
							<input type = "text" value = "<?php echo $fetch['pdescription']?>" class = "form-control" name = "pdescription" />
						</div>
                        <div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<img src = "images/<?php echo $fetch['pi_main']?>" id = "lbl" width = "auto" height = "auto"/>
							</div>
							<input type = "file" required = "required" id = "pi_main" name = "pi_main" />
						</div>
						<div class = "form-group">
							<label>Price </label>
							<input type = "number" min = "0" max = "999999999" value = "<?php echo $fetch['package']?>" class = "form-control" name = "package" />
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
                        $pi_main = addslashes(file_get_contents($_FILES['pi_main']['tmp_name']));
                        $photo_name = addslashes($_FILES['pi_main']['name']);
                        $photo_size = getimagesize($_FILES['pi_main']['tmp_name']);
                        move_uploaded_file($_FILES['pi_main']['tmp_name'],"images/" . $_FILES['pi_main']['name']);
                        $package = $_POST['package'];
                        $db->query("UPDATE `information` SET `pname` = '$pname', `pdescription` = '$pdescription', `pi_main` = '$pi_main',`package` = '$package' WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
                        header("location:editinfo2.php");
                    }
                    ?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
</script>
</html>