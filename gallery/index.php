<?php
require 'connection.php';
if (isset($_FILES['upload'])) {
	$f = $_FILES['upload'];
	if($f['error'] === 0){
		$new_path = tempnam('uploads','img');
		$new_path = 'uploads/'.basename($new_path);
		$slashed_path = addslashes($new_path);
		move_uploaded_file($f['tmp_name'], $new_path);
		$type = explode('/',$f['type'])[0];
		$query = "INSERT INTO files (name,path,type) 
				  VALUES('{$f['name']}','{$slashed_path}','{$type}')";
		mysqli_query($con,$query);
		header('Location: ../gallery/index.php');
		exit();
	}
}


$files = mysqli_query($con,"SELECT * FROM files WHERE type = 'image'");

 ?>
	


<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="upload" id="">
	<input type="submit" value="Upload">
</form>

<ul>
<?php foreach ($files as $file){ ?>
	<li><img src="<?php echo $file['path']; ?>" alt="<?php echo $file['name']; ?>" width='100px;'></li>
<?php } ?>
	
</ul>