<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP File Uploading</title>
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
		<input type="file" name="image" id="image">
		<input id="submit" type="submit" name="submit" value="submit">
	</form>
	<?php 
	if (isset($_FILES) && !empty($_FILES)) {
		$fileName = $_FILES['image']['name'];
		$NameandExt = explode('.', $fileName);
		$onlyName = $NameandExt[0];
		$extension = $NameandExt[(count($NameandExt) - 1)];
		$supported_ext = ['png','jpg','jpeg'];
		if(!in_array($extension, $supported_ext)){
			echo '<p class="text-red">error uploading file! file type not supported! only .png, .jpg, .jpeg</p>';
			echo print_r();
			exit;
		}
		if($_FILES['image']['size'] > 1*1024*1024){
			echo '<p class="text-red">error uploading file! file size must be less then 1MB</p>';
			exit;
		}
		if(($_FILES['image']['error'] >= 1)){
		echo '<p class="text-red">Error Uploading File! There is some error!</p>';
		echo var_dump($_FILES);
		exit;
		}
		if(move_uploaded_file($_FILES['image']['tmp_name'], 'uploaded/'.$onlyName.'.'.$extension)){
		echo "<p class='text-green'>File was uploaded successfully!</p>";
			exit;
		}else{
			echo '<p class="text-red">there is some error!your file was not uploaded!</p>';
		}
	}

	 ?>
</body>
</html>