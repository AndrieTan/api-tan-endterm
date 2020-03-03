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
		<?php 
			switch($page){
				case 'Product':
					require_once 'product_list.php';
				break;
				case 'Category':
					require_once 'category_list.php';
				break;
				case 'AddProd':
					require_once 'form_create.php';
				break;
				case 'Details':
					require_once 'product_info.php';
				break;
				case 'Update':
					require_once 'product_update.php';
				break;
				case 'Delete':
					require_once 'product_delete.php';
				break;	
				default:
				break;
			}
			?>
  </html>
