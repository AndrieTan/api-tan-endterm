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
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<center>
		<h1>ARE YOU SURE YOU WANT TO DELETE <?php echo $result['name']?>?</h1>
		<br>
		<form action = "pro_delete.php?id=<?php echo $id?>" method = "POST">
			<input type="Submit" name="Submit" value="YES">
		</form>
		<form action="index.php?page=product">
			<input type="Submit" name="Submit" value = "NO">
		</form>
	</body>
</html>
