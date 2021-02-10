<div class="container">
    <?php
    check_message();

    ?>

    <?php
    $mydb->setQuery("SELECT * FROM `tblroom`");
    $cur = $mydb->loadResultList();
  
    ?>
    <div class="row">
        <?php foreach ($cur as $result){ 
        
            ?>

        <div class="col-lg-2 col-6">
            <!-- small card -->
            <div class="small-box bg-<?php if ($result->STATUS=="Pending") {echo "warning";} elseif ($result->STATUS=="checkout") {echo "danger";}else{echo "success";}   ?>">
                <div class="inner">
                    <h3><?php echo "S/.". $result->PRICE; ?></h3>
                    <p><?php echo $result->ROOM; ?></p>
                </div>
                <div class="icon">
                <i class="fas fa-bed"></i>
                </div>
                <a href="index.php?view=add&id=<?php echo $result->ROOMID; ?>" class="small-box-footer">
                    Reservar <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <?php }   ?>
    </div>

</div>


<!--End of container-->