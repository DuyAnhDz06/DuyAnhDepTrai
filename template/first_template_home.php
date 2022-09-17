<!DOCTYPE html>
<html>

<head>
	<title>Customer</title>
	<link rel="icon" type="image/png" href="https://metagreen.vn/wp-content/uploads/2022/04/he-thong-nuoc-nong-trung-tam-heatpump-metagreen-2.jpg" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="template.css">
</head>

<body>

	<div class="container-fluid">
		<div class="row header">
			<?php
			include_once("first_template_header.php");
			?>
		</div>
		<img class="conca" src="https://www.duchuymobile.com/images/promo/34/s20-plus-pc-banner.jpg">
		<div class="search">
    <form action="" method="get">   
        <input type="text" placeholder="Search.." name="keyword" />
        <button type="submit" onclick="window.location.href = 'https://iconarchive.com/download/i66075/jommans/mushroom/Search.ico'" ><img src="https://freeiconshop.com/wp-content/uploads/edd/search-outline-filled.png" ></button>
    </form>
</div>
<h1><h1 class="text-center"> Duy Anh's Smart Phone</h1></h1>
		<div class="row">
			<div class="left col-lg-3">
				<?php
				include_once("first_template_left.php");
				?>
			</div>
			<div class="right col-lg-9">
				<div class="row">
					<div class="col-lg-8">
						<?php
						include_once("first_template_main.php");
						?>
					</div>
					<div class="col-lg-4">
						<?php
						include_once("first_template_ad.php");
						?>
					</div>
					
					
				
					
				</div>

			</div>

			<?php 
	require_once('footer.php'); 
	?>

			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
<style>
	img.advertisement{
        height: 250px;
        width: 360px;
        margin-bottom: 10px;
        image-rendering: pixelated;
        display: block;
    }
</style>