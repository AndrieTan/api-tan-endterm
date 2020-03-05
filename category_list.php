<?php
	$jsonCategory = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$categoryData = json_decode($jsonCategory,true);
	$category = $categoryData['records'];
?>
<link rel="stylesheet" type="text/css" href="css/style.css">   
<center><h1>CATEGORY LIST</h1>
	<hr style ="width: 25%;">
<br>

<table id="products">
		<tr>
			<td> <b>ID</b> </td>
			<td> <b>Name</b> </td>
			<td> <b>Description</b> </td>
		</tr>
<?php 
	foreach($category as $result)
	{
?>
		<tr>
      		<td><?php echo $result['id']; ?> </td>
     		<td><?php echo $result['name']; ?> </td>
      		<td><?php echo $result['description'];?> </td>
		</tr>
<?php
	}
?>
</table>
