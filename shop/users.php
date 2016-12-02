<?php 
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['name'];
	$query = "INSERT INTO users(name) VALUE('{$name}')";
	mysqli_query ($con, $query);
	header('Location: ../shop/users.php');
	exit();
}


$item = "name";
require 'form.php';
 ?>


<ul>
	
<?php 
	$users = mysqli_query($con, "SELECT * FROM users");
	foreach ($users as $u) {
		echo "<li>{$u['name']}</li>";
	}

 ?>
	
</ul>