<?php
	$id = $_GET['id'];
 	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 	$data = json_decode($json,true);
 	$details = array('records' => $data);
 	$result = $details['records'];
?>

<html>
	<head> 
		<title> Delete Confirm </title>
	</head>
	<body>
		<h1>Are you sure to delete <?php echo $result['name']?>?</h1>
		<br>
		<form action = "pro_delete.php?id=<?php echo $id?>" method = "POST">
			<input type="Submit" name="Submit" value="Yes">
		</form>
		<form action="product_list.php">
			<input type="Submit" name="No">
		</form>
	</body>
</html>
