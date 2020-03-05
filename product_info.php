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
		<h2><b>Name: </b><?php echo $result['name'];?></h2>
		<h2><b>Description: </b><?php echo $result['description'];?></h2>
		<h2><b>Price: </b><?php echo $result['price'];?></h2>
		<h2><b>Category: </b><?php echo $result['category_name'];?></h2>
		<br>
<a href="index.php?page=update&id=<?php echo $id; ?>" type="submit">UPDATE</a>&nbsp;
<a href="index.php?page=delete&id=<?php echo $id; ?>" type="submit">DELETE</a>
