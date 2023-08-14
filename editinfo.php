<!-- <!DOCTYPE html>
<?php
	include("database.php");
?>

	
	
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<!-- <div class = "alert alert-info"></div> -->
				<br />
				<div class = "col-md-4">
					<?php
						$query = $db->query("SELECT * FROM `information` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
						$fetch = $query->fetch_array();
					?>
					<form method = "POST" enctype = "multipart/form-data">
						
						<div class = "form-group">
							<label>Place Name </label>
							<input type = "text" value = "<?php echo $fetch['pname']?>" class = "form-control" name = "pname" />
						</div>
            <div class = "form-group">
							<label>Description </label>
							<input type = "text" value = "<?php echo $fetch['pdescription']?>" class = "form-control" name = "pdescription" />
						</div>
						<div class = "form-group">
							<label>Photo </label>
							<div id = "preview" style = "width:auto; height :auto; border:1px solid #000;">
								<img src = "photo/<?php echo $fetch['pi_main']?>" id = "pi_main" width = "100%" height = "100%"/>
							</div>
							<input type = "file" required = "required" id = "photo" name = "photo" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "edit_room" class = "btn btn-warning form-control"><i class = "glyphicon glyphicon-edit"></i> Save Changes</button>
						</div>
					</form>
					<?php 
                    // require_once 'database.php';
					include("database.php");
					if(ISSET($_POST['editinfo'])){
                        $pname = $_POST['pname'];
                        $pdescription = $_POST['pdescription'];
                        $pi_main = addslashes(file_get_contents($_FILES['pi_main']['tmp_name']));
                        $photo_name = addslashes($_FILES['photo']['name']);
                        $photo_size = getimagesize($_FILES['photo']['tmp_name']);
                        move_uploaded_file($_FILES['photo']['tmp_name'],"photo/" . $_FILES['photo']['name']);
                        $db->query("UPDATE `information` SET `pname` = '$pname', `pdescription` = '$pdescription', `pi_main` = '$pi_main' WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysqli_error());
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
<!-- <script src = "../js/jquery.js"></script>
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
	}); -->
<!-- </script> -->
</html>