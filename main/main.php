<!DOCTYPE html>
<html>
<head>
	<title>Smart Phone</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link rel="icon" type="image/png" href="https://quanaosida.vn/wp-content/uploads/dien-thoai-icon-1536x1536.png"/>
	<link rel="stylesheet" type="text/css" href="main.css">
	<style>
		.search button{
			background: none;
			border-radius: 50%;
			border: none;
		}
	</style>
	
</head>
<body>
<?php 
//liên kết file db.php vào file index để có các hàm kết nối csdl
require_once('/XAMPP/htdocs/Super-Code/PHP/FirstpagePHP/main/db.php');

if(isset($_POST['add']))
{

	$id = $_POST['id'];
	$name = $_POST['name'];
	if($_FILES)
	{
		$image = $_FILES['image']['name'];
		$path = "images/" . $image;
		move_uploaded_file($_FILES['image']['tmp_name'], $path);
	}
	
	$cat = $_POST['cat'];
	$price = $_POST['price'];
	$sql = "Insert Into product values('" . $id . "', '" . $name . "', '" . $path . "', " . $price . ", " . $cat . ")";
	
	execsql($sql);
}
if(isset($_GET['deleteid']))
{
	$id = $_GET['deleteid'];
	$sql = "delete from product where ProductId = '" . $id . "'";
	execsql($sql);
}
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$path = $_POST['imageold'];

	if($_FILES)
	{
		if(isset($_FILES['image']['name']) && $_FILES['image']['name'] !='')
		{
			$image = $_FILES['image']['name'];
			$path = "images/" . $image;
			move_uploaded_file($_FILES['image']['tmp_name'], $path);
		}
				
	}
	$cat = $_POST['cat'];
	$price = $_POST['price'];
	$sql = "Update product set ProductName='" . $name . "', Image='" . $path . "', Price=" . $price . ", CatId=" . $cat . " Where ProductId = '" . $id . "'";	
	execsql($sql);
}

?>
<div class="bodyconca">
	<?php 
	require_once('header.php');
	?>
	<h1 class="text-center"> Duy Anh's Smart Phone</h1>
	<img class="conca" src="https://clickbuy.cdn.vccloud.vn/uploads/2020/12/Xs-banner.jpg">
	

	<div>
		<!-- heading and main content -->
		
		
		<?php 
		require_once('right.php');
		?>	
		
			
	</div>
	<?php 
	require_once('footer.php') 
	?>
	
</body>
</html>
