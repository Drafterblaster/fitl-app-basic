<?php
$title = 'Next Ordering Solutions';
$order = 'Drill Bit #58892';
$description = 'Drill bit for #75 hub';
$alert = 'Warm Item. Will need on Monday, January 14';
$date = 'January 1, 2019';
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<BODY>
		<H1><?php echo $order; ?></H1>
		<p><?php echo $description; ?></p>
		<pre><?php echo $alert; ?></pre>
		<p>Order Date: <?php echo $date; ?></p>
	</BODY>
</html>