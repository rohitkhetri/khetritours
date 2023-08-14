<!DOCTYPE html>
<?php
include("database.php");
?>
<html lang = "en">
	<head>
		<title>Hotel.</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<br />
				<div class = "col-md-4">	
					<form method = "POST" enctype = "multipart/form-data">
						<!-- <div class = "form-group">
							<label>Room Type </label>
							<select class = "form-control" required = required name = "room_type">
								<option value = "">Choose an option</option>
								<option value = "Standard">Standard</option>
								<option value = "Superior">Superior</option>
								<option value = "Super Deluxe">Super Deluxe</option>
								<option value = "Jr. Suite">Jr. Suite</option>
								<option value = "Executive Suite">Executive Suite</option>
							</select>
						</div> -->
						<div class = "form-group">
							<label>Place Name </label>
							<input type = "text" class = "form-control" name = "pname" />
						</div>
                        <div class = "form-group">
							<label>Place Description </label>
							<input type = "text" class = "form-control" name = "pdescription" />
						</div>
						<div class = "form-group">
							<label>Package</label>
							<input type = "number" class = "form-control" name = "package" />
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:150px; height :150px; border:1px solid #000;">
								<center id = "lbl">[Photo]</center>
							</div>
							<input type = "file" required = "required" id = "pi_main" name = "pi_main" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "add_info" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-save"></i> Saved</button>
						</div>
					</form>
					<?php
                    if(ISSET($_POST['add_info'])){
                        $pname = $_POST['pname'];
                        $pdescription = $_POST['pdescription'];
                        $pi_main = addslashes(file_get_contents($_FILES['pi_main']['tmp_name']));
						$package = $_POST['package'];
                        // $photo_name = addslashes($_FILES['pi_main']['pi_main']);
                        // $photo_size = getimagesize($_FILES['pi_main']['tmp_name']);
                        // move_uploaded_file($_FILES['pi_main']['tmp_name'],"images/" . $_FILES['pi_main']['name']);
                        $db->query("INSERT INTO `information` (pname, pdescription, pi_main, package) VALUES('$pname', '$pdescription', '$photo_name' , '$package')") or die(mysqli_error());
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