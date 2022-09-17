<?php
include_once('db.php');
$sql = "Select * From Category";
$rows = query($sql);
?>



<div class="dropdown a">
  <button class="dropbtn">CATEGORY</button>
  <div class="dropdown-content">
  <?php
    include_once('db.php');
    $sql = "select * from category";
    $rows = query($sql);
    for ($i = 0; $i < count($rows); $i++) {
    ?>
    <a href="first_template_home.php?catid=<?= $rows[$i][0] ?>"><?= $rows[$i][1] ?></a>
    <?php
    }
    ?>
  </div>
</div>
