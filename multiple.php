<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP Multiple File Uploading</title>
	<style>
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		body{
			display:flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			flex-direction: column;
		}
		input{
			display: block;
			margin: 10px;
		}
		form{
			border: 1px solid #000;
			padding: 10px;
		}
		#submit{
			border: none;
			background: #00f;
			padding: 10px;
			border-radius: 10px;
			cursor: pointer;
		}
		#image{
			border: 1px solid;
			padding: 10px;
			cursor: pointer;
		}
		.text-red{
			color: #f00;
		}
		.text-green{
			color: #0f0;
		}
	</style>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="image[]" id="image" multiple>
		<input id="submit" type="submit" name="submit" value="submit">
	</form>
	<?php 
	if (isset($_FILES) && !empty($_FILES)) {
		foreach ($_FILES['image']['tmp_name'] as $index => $tmp_name) {
			// code...
		}
	}

	 ?>
</body>
</html>