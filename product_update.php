<?php
	$id = $_GET['id'];
	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
	$data = json_decode($json,true);
	$details = array('records' => $data);
	$result = $details['records'];
	
	$jsonCat = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$catData = json_decode($jsonCat,true);
	$category = $catData['records'];

?>
<title> Update Product </title>
<link rel="stylesheet" type="text/css" href="css/style.css">    
<form method="POST" action="pro_update.php?id=<?php echo $id ?>">
	<center>
	<h1> UPDATE PRODUCT </h1>
	<hr style ="width: 25%;">
	<br>
	<h2><b>Name:</b>&nbsp;<input type="text" name="name" value="<?php echo $result['name'];?>"></h2>
	<h2><b>Description:<b>&nbsp;<input type="text" name="description" value="<?php echo $result['description'];?>"></h2>
	<h2><b>Price:</b>&nbsp;<input type="text" name="price" value="<?php echo $result['price'];?>"></h2>
	<h2><b>Category</b>:&nbsp;
	<select type="text" name="category">
		<option value="<?php echo $result['category_id'];?>" selected> <?php echo $result['category_name'];?> </option>
		<?php
			foreach($category as $catSelect)
					{
		?>
			<option value="<?php echo $catSelect['id']; ?>"> <?php echo $catSelect['name']; ?> </option>
		<?php
					}
		?>
	</h2>
	</select>
	<br><br>
	<button class="confirm" type="submit" value="Create" name="Submit"> UPDATE </button>
</form>
