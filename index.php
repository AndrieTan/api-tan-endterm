<?php
	$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<html>
	<head>
		<title> API Inventory </title>
		<link rel="stylesheet" type="text/css" href="css/style.css">   
	</head>
	<center><h1 style = "font-size:50px";> API INVENTORY </h1>
	<body>
	   <center>
		<a href = index.php?page=add> Create </a> &nbsp;
		<a href = index.php?page=product> Read </a> &nbsp;
	  	<a href = index.php?page=category> Categories </a> &nbsp;
	<div class = "content">
		<?php 
			switch($page){
				case 'product':
					require_once 'product_list.php';
				break;
				case 'category':
					require_once 'category_list.php';
				break;
				case 'add':
					require_once 'form_create.php';
				break;
				case 'info':
					require_once 'product_info.php';
				break;
				case 'update':
					require_once 'product_update.php';
				break;
				case 'delete':
					require_once 'product_delete.php';
				break;	
				default:
				break;
			}
			?>
	</div>
	</body>
</html>
