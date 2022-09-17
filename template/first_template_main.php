<?php
include_once('db.php');
if (isset($_GET['catid']))
    $sql = "select * from Product where CatID ='" . $_GET['catid'] . "'";
elseif (isset($_GET['productid']))
    $sql = "select * from Product where ProductId ='" . $_GET['productid'] . "'";
elseif (isset($_GET['keyword']))
    $sql = "select * from product where productname like '%" . $_GET['keyword'] . "%' or productid like '%" . $_GET['keyword'] . "%' ";
else
    $sql = "select * from Product";
$rows = query($sql);
for ($i = 0; $i < count($rows); $i++) {
?>
    <ul class="product">
        <li><a href="first_template_product.php?productid=<?= $rows[$i][0] ?>"> <img src="<?= $rows[$i][2] ?>" alt="<?= $rows[$i][0] ?>"></a></li>
        <li><?= $rows[$i][0] ?></li>
        <li><?= $rows[$i][1] ?></li>
        <li><?= $rows[$i][3] ?></li>
        <li><?= $rows[$i][5] ?></li>
    </ul>
<?php
}
?>
