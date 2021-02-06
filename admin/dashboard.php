<?php

require_once("../includes/initialize.php"); ?>


 <!-- Main content -->
 <section class="content">
                            <?php
                            $query = "SELECT count(*) as 'Total' FROM `tblpayment` WHERE `STATUS`='Pending'";
                            $mydb->setQuery($query);
                            $cur = $mydb->loadResultList();  
                            foreach ($cur as $result) { 
                                ?>

                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?php echo  isset($result->Total) ?  $result->Total : '';?></h3>
                               

                                    <p>Nueva Reserva</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="<?php echo WEB_ROOT; ?>admin/mod_reservation/index.php" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php
                            $query = "SELECT count(*) as 'Total' FROM `tblreservation` WHERE `PRORPOSE`='Travel'";
                            $mydb->setQuery($query);
                            $cur = $mydb->loadResultList();  
                            foreach ($cur as $result) { 
                                ?>

                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?php echo  isset($result->Total) ?  $result->Total : '';?><sup style="font-size: 20px"></sup></h3>

                                    <p>Reservas realizadas</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="<?php echo WEB_ROOT; ?>admin/mod_reports/index.php" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <?php } ?>
                        <?php
                            $query = "SELECT count(*) as 'Total' FROM `tblguest` WHERE `G_TERMS`='1'";
                            $mydb->setQuery($query);
                            $cur = $mydb->loadResultList();  
                            foreach ($cur as $result) { 
                                ?> 
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">

                                    <h3><?php echo  isset($result->Total) ?  $result->Total : '';?></h3>

                                    <p>Registros de usuarios</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="<?php echo WEB_ROOT; ?>admin/mod_users/index.php" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>Unique Visitors</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->

                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->

                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
                </div>
                <!-- /.container-fluid -->
            </section>

   

         
          