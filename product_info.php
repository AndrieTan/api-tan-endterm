<?php
	$id = $_GET['id'];
 	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 	$data = json_decode($json,true);
 	$details = array('records' => $data);
 	$result = $details['records'];

?>
        <link rel="stylesheet" type="text/css" href="css/style.css">    
	<center><h1> PRODUCT DETAILS </h1>
	<hr style ="width: 25%;">
	<br>
	<table style="border: 1px black solid;">
		<tr>
			<td><h2>Name:</h2></td>
			<td><h2><?php echo $result['name']; ?></h2></td>
		</tr>
		<tr>
			<td><h2>Description: </h2></td>
			<td><h2><?php echo $result['description']; ?></h2></td>
		</tr>
		<tr>
			<td><h2>Price: </h2></td>
			<td><h2><?php echo $result['price']; ?></h2></td>
		</tr>
		<tr>
			<td><h2>Category: </h2></td>
			<td><h2><?php echo $result['category_name']; ?></h2></td>
		</tr>
	</table>
<a href="product_update.php?id=<?php echo $id; ?>" type="submit">Update</button></a>
<a href="product_delete.php?id=<?php echo $id; ?>" value="Delete" type="submit">Delete</button></a>
