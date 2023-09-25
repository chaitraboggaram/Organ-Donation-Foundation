<!DOCTYPE html>
<html>
<head>
	<title>Comments</title>
	<?php 
	include_once 'html_commons/main-header.php';
	include_once 'html_commons/new-side.php';
	?>
</head>
<body>
<div class="col-sm-8 col-sm-offset-3" style="margin-top: 20px;" class="align">
			<div class="panel panel-primary">
			<h1> Comments</h1>
				<div class="panel-heading">
					<b>Post your comments</b>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label>Name:</label>
						<input type="text" name="name" id="cname" required/></body><br>
					</div>
					<div class="form-group">
						<br><br><label>Comments:</label>
						<textarea name="comments" rows="5" cols="30">
							Write your comments
						</textarea>
					</div>
				</div>
			</div>
		</div>
</body>
</html>