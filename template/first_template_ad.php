<div class="right">
    <?php
    include_once('db.php');
    $sql = "select * from product";
    $rows = query($sql);
    $section = array_rand($rows);
    for($i=0;$i<4;$i++){
        ?>
        <img src="<?= $rows[array_rand($rows[$section])][2] ?>" class="advertisement" alt="">  
    <?php
    }
    ?>
</div>
