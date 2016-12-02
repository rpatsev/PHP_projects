<?php 
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$title = $_POST['title'];
	$query = "INSERT INTO items(title) VALUE('{$title}')";
	mysqli_query ($con, $query);
	header('Location: ../shop/items.php');
	exit();
}

$item = "title";
require 'form.php';
 ?>
<ul>
	
<?php 
	$items = mysqli_query($con, "SELECT * FROM items");
	foreach ($items as $i) {
		echo "<li>{$i['title']}</li>";
	}

 ?>
	
</ul>
