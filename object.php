<?php
$id = $_REQUEST['id'];

$object = array(
	'title' => '',
	'type' => '',
	'deliver' => '',
	'description' => '',
	'custom_01' => '',
	'custom_02' => '',
	'custom_03' => '',	
	'timestamp' => '',
);

// Database connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

// Create connection
$connection = new mysqli($servername, $username, $password);

// Check for error
if ($connection->connect_error) {
	echo 'Connection failed: ' . $connection->connect_error;
	exit;
}

// Otherwise, connected successfully!
// echo 'Connected successfully!!';

// Connect to the "fitl2" database
$connection->select_db('fitl2');

// Query to select the object
// SELECT * FROM fillorders WHERE id = 1
$sql = 'SELECT * FROM fillorders WHERE id = ' . $id;

// Execute the query
$result = $connection->query($sql);

// Check for and retreive the object
if ($result->num_rows > 0) {
	$object = $result->fetch_assoc();
	// echo '<pre>';
	// print_r($object);
	// echo '</pre>';
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['title']; ?></title>
	</head>
	<BODY>
		<H1><?php echo $object['type']; ?></H1>
		<p><?php echo $object['deliver']; ?></p>
		<p><?php echo $object['description']; ?></p>		
		<pre><?php echo $object['custom_01']; ?></pre>
		<pre><?php echo $object['custom_02']; ?></pre>
		<pre><?php echo $object['custom_03']; ?></pre>				
		<p>Order_Date: <?php echo $object['timestamp']; ?></p>
	</BODY>
</html>