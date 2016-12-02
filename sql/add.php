<?php 
require 'fields.php';



if (!empty($_GET['name'])){
	$names = $_GET['name'];
}
if (!empty($_GET['password'])){
	$password = $_GET['password'];
}
if (!empty($_GET['age'])){
	$age = $_GET['age'];
}

//var_export($fields);

/*$names = "2php";
$password = "dsdgsg";
$age = 12;
*/
$con = mysqli_connect('localhost', 'root', '', 'blog');
$q = 'INSERT INTO users VALUES ("{$names}","{$password}",{$age})';
$result = mysqli_query($con, $q);
var_export($result);
 ?>

<form action="" method = "GET">
<?php 

foreach ($fields as $field) {
	$type = $field['type'];
	$name = $field['name'];

?>
<div>
	 <input type="<?php echo $type; ?>" name="<?php echo $name; ?>" placeholder="<?php echo $name; ?>" required="required">
</div>
<?php } ?>
	<div>
		 <input type="submit" value="Add">
	</div>
 </form>

 <?php 

//header('Location: ../sql/index.php');

  ?>