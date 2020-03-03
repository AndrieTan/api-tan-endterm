<html>
	<head>
		<title> Test </title>
	</head>
	<body>
	  <a href = https://api-tan-endterm.herokuapp.com/form_create.php> Create </a> &nbsp;
	  <a href = https://api-tan-endterm.herokuapp.com/form_delete.php> Delete </a> &nbsp;
	  <a href = https://api-tan-endterm.herokuapp.com/product_list.php> Read </a> &nbsp;
	  <a href = https://api-tan-endterm.herokuapp.com/category_list.php> Categories </a> &nbsp;
	 </body>
	<div class="content">
			<?php 
			switch($page){
				case 'Product':
					require_once 'product_list.php';
				break;
				case 'Category':
					require_once 'category_list.php';
				break;
				case 'AddProd':
					require_once 'addproduct.php';
				break;
				case 'Details':
					require_once 'product_details.php';
				break;
				case 'Update':
					require_once 'updateproduct.php';
				break;
				case 'Delete':
					require_once 'deleteproduct.php';
				break;	
				default:
				break;
			}
			?>
		</div>
  </html>
