
<?php
$hnav = array(
    array("👤Home Page", "http://localhost/Super-Code/PHP/FirstpagePHP/template/first_template_home.php"),
    array("👨💻Product", "http://localhost/Super-Code/PHP/FirstpagePHP/template/notfound.php"),
    array("👨💻Download", "http://localhost/Super-Code/PHP/FirstpagePHP/template/notfound.php"),
    array("👨💻Contact", "http://localhost/Super-Code/PHP/FirstpagePHP/template/notfound.php"),
    array("👨💻Checkout", "http://localhost/Super-Code/PHP/FirstpagePHP/template/notfound.php"),
    array("","#"),
    array("","#"),
    array("","#"),
    array("","#"),
    array("","#"),
    array("","#"),
    array("","#"),
    array("","#"),
    array("","#"),
    array("🚴🏾‍♂️Signing Up","http://localhost/Super-Code/PHP/FirstpagePHP/template/signup.php"),
    array("🚴🏾‍♂️Login","http://localhost/Super-Code/PHP/FirstpagePHP/template/login.php"),

);

include_once('db.php');
if (isset($_GET['productid']))
    $sql = "select * from Product where ProductId ='" . $_GET['productid'] . "'";
elseif (isset($_GET['keyword']))
    $sql = "select * from product where productname like '%" . $_GET['keyword'] . "%' or productid like '%" . $_GET['keyword'] . "%' ";
else
    $sql = "select * from Product";
$rows = query($sql);


?>
<ul class="nav">
    <?php
    for($i = 0; $i < count($hnav); $i++){
    ?>    
     <li class="nav-item"><a href="<?=$hnav[$i][1]?>" class="nav-link">
     <?=$hnav[$i][0]?>
     </a></li>
    <?php
    }
    ?>
    
    <?php
    include_once('db.php');
if (isset($_GET['productid']))
    $sql = "select * from Product where ProductId ='" . $_GET['productid'] . "'";
elseif (isset($_GET['keyword']))
    $sql = "select * from product where productname like '%" . $_GET['keyword'] . "%' or productid like '%" . $_GET['keyword'] . "%' ";
else
    $sql = "select * from Product";
$rows = query($sql);
?>


</ul>



