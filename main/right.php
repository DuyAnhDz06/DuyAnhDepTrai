<?php
if (isset($_GET['catid']))
$sql = "select * from product where CatId=" . $_GET['catid'];
elseif (isset($_GET["keyword"]))
$sql = "Select * From Product Where ProductName like '%" . $_GET['keyword'] . "%'";
else
$sql = "select * from product";
$rows = query($sql);
?>
<div class="right">
<div class="search">
    <form action="" method="get">
        <input type="text" placeholder="Search.." name="keyword" />
        <button type="submit" onclick="window.location.href = 'first_template_home.php'" ><img src="images/search.png" style="width: auto; height: 90px;"></button>
    </form>
</div>

<table class="table">
		<thead class="thead-dark">
			<tr>
				<th width="40" class="bg-dark  text-white">Image</th>
				<th width="40"  class="bg-dark text-center text-white" >Product name</th>
				<th width="30" class="bg-dark text-center text-white">Price</th>
				<th width="30" class="bg-dark text-center text-white">Action</th>
			</tr>
		</thead>
		<?php
		for ($i = 0; $i < count($rows); $i++) {
		?>
			<thead class="thead-dark">
				<tr align="center">
					<td><img src="<?= $rows[$i][2] ?>" width="100%" alt=""></td>
					<td><?= $rows[$i][1] ?></td>
					<td><?= $rows[$i][3] ?></td>
					<td>
						<a href="main.php?updateid=<?= $rows[$i][0]?>" class="btn btn-success">Edit

						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
</a> 
						<a class="btn btn-danger" href="main.php?deleteid=<?= $rows[$i][0] ?>">Delete
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a>
					</td>
			</thead>
			</tr>
		<?php

		}
		?>
	</table>

	<?php
	if (isset($_GET['updateid']))
		require_once('update.php');
	else
		require_once('add.php');
	?>
</div>