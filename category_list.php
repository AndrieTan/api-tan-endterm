<?php
	$jsonCategory = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$categoryData = json_decode($jsonCategory,true);
	$category = $categoryData['records'];
?>


<center><h1>CATEGORY LIST</h1>
<br>

<table>
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
