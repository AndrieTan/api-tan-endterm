<?php
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

$data = json_decode($json,true);
$list = $data['records'];


?>

<h1>Products</h1>

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
        <td><?php echo $value['name'];?><a href = "product_info.php?id=<?php echo $value ['id'];?></a></td>
        <td><?php echo $value['description'];?></td>
        <td><?php echo $value['price'];?></td>
        <td><?php echo $value['category_name'];?></td>
    </tr>
<?php
}
?>
</table>
