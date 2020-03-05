<?php
	$id = $_GET['id'];
 	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 	$data = json_decode($json,true);
 	$details = array('records' => $data);
 	$result = $details['records'];

?>
	<title> Product Details </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">    
	<center><h1> PRODUCT DETAILS </h1>
	<hr style ="width: 25%;">
	<br>
		<h2>Name: </h2>
		<h2><?php echo $result['name']; ?></h2>
		<h2>Description: </h2>
		<h2><?php echo $result['description']; ?></h2>
		<h2>Price: </h2>
		<h2><?php echo $result['price']; ?></h2>
		<h2>Category: </h2>
		<h2><?php echo $result['category_name']; ?></h2>
		<br>
<a href="product_update.php?id=<?php echo $id; ?>" type="submit">UPDATE</a>&nbsp;
<a href="product_delete.php?id=<?php echo $id; ?>" type="submit">DELETE</a>
