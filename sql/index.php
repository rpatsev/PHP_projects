
	<?php 

	$con = mysqli_connect('localhost', 'root', '', 'blog');
	$q = 'SELECT name, age FROM users';
if (!empty($_GET['name'])) {
	$name = $_GET['name'];
	$q .= " WHERE name LIKE '%{$name}%'";
}
if (isset($_GET['#check_name'])) {
	$q .= " ORDER BY name";
}
if (isset($_GET['#check_age'])) {
	$q .= " ORDER BY age";
}
	$res = mysqli_query($con, $q);

	foreach ($res as $row) {
		echo"<p>{$row['name']} - {$row['age']}</p>";
	}


	 ?>


	 <form action="">
	 	<input type="text" name='name' placeholder="search">
	 	<label for="check_age">Sort by age</label>
	 	<input type="radio" name="sort" id="check_age">
	 	<label for="check_name">Sort by name</label>
	 	<input type="radio" name="sort" id="check_name">
	 	<input type="submit" value="Search">
	 	<button><a href="../sql/add.php">Add</a></button>
	 </form>
