<?php
	$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");
	$data = json_decode($json,true);

	$search = (isset($_POST['search']) && $_POST['search'] != '') ? $_POST['search'] : '';

	if(isset($search)){
	$prodsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
	$rec = json_decode($prodsearch,true);

	$list = $data['records'];

	}else{
		$list = $data['records'];
	 }

?>

<h1>Products</h1>

<form method = "POST" action="product_list.php">
	<input class="search" type="text" name ="search">
	<input class="submit" type="submit" name="submit" value="SEARCH">
</form>

<table border="1px">
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
