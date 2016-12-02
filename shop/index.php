<?php  
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$user_id = $_POST['user'];
	$item_id = $_POST['item'];
	$q = "INSERT INTO orders VALUES({$user_id},{$item_id})";
	$orders = mysqli_query($con,$q);
	header('Location: ../shop/index.php');
	exit();
}

$users = mysqli_query($con, "SELECT * FROM users");
$items = mysqli_query($con, "SELECT * FROM items");
$order_q = "SELECT users.name, items.title FROM orders JOIN users JOIN items ON user_id = users.id AND item_id = items.id";
$orders = mysqli_query($con, $order_q);
?>


<ul>
	<li><a href="../shop/users.php">Users</a></li>
	<li><a href="../shop/items.php">Items</a></li>
</ul>

<form action="" method = "POST">
	<select name="user" id="">
		<?php foreach ($users as $u){ ?>
			<option value="<?php echo $u['id']; ?>"><?php echo $u['name']; ?></option>
		<?php } ?>
	</select>
	<select name="item" id="">
		<?php foreach ($items as $i){ ?>
			<option value="<?php echo $i['id']; ?>"><?php echo $i['title']; ?></option>
		<?php } ?>
	</select>
	<input type="submit" value="Create order">
</form>

<ul>
	<?php foreach ($orders as $order){ ?>
		<li><?php echo $order['name']; ?> - <?php echo $order['title']; ?></li>
	<?php } ?>	

</ul>
