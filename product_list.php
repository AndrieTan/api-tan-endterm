<?php
	if(isset($_POST['search'])){
	$search = $_POST['search'];
}
	if(isset($search)){
		$json = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
		$data = json_decode($json,true);
	}
	else {
		$json = file_get_contents('http://rdapi.herokuapp.com/product/read.php');
		$data = json_decode($json,true);
	}

	$list = $data['records'];
?>
<title> Products </title>
<link rel="stylesheet" type="text/css" href="css/style.css">    
<center><h1>PRODUCTS</h1>

<form method = "POST" action="product_list.php">
	<input class="search" type="text" name ="search">
	<input class="submit" type="submit" name="submit" value="SEARCH">
</form>

<table id="products" align="center">
    <tr class="head">
        <td>Name</td>
        <td>Description</td>
        <td>Price</td>
        <td>Category</td>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><a href = "product_info.php?id=<?php echo $value ['id'];?>"><?php echo $value['name'];?></a></td>
        <td><?php echo $value['description'];?></td>
        <td><?php echo $value['price'];?></td>
        <td><?php echo $value['category_name'];?></td>
    </tr>
<?php
}
?>
</table>
