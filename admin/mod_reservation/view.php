<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$code=$_GET['code'];


 
		$query="SELECT  `G_FNAME` ,  `G_LNAME` ,  `G_ADDRESS` ,  `TRANSDATE` ,  `CONFIRMATIONCODE` ,  `PQTY` ,  `SPRICE` ,`STATUS`
				FROM  `tblpayment` p,  `tblguest` g
				WHERE p.`GUESTID` = g.`GUESTID` AND `CONFIRMATIONCODE`='".$code."'";
		$mydb->setQuery($query);
		$res = $mydb->loadSingleResult();

		if($res->STATUS=='Confirmed'){
			$stats = '<li class="next"><a href="'.WEB_ROOT .'admin/mod_reservation/controller.php?action=checkin&code='.$res->CONFIRMATIONCODE.
		'">Confirmed &rarr;</a></li>';
		}elseif($res->STATUS=='Checkedin'){
		$stats = '<li class="next"><a href="'.WEB_ROOT .'admin/mod_reservation/controller.php?action=checkout&code='.$res->CONFIRMATIONCODE.
		'">Checkin &rarr;</a></li>';
		}elseif($res->STATUS=='Checkedout'){
		$stats= "";
		}else{
			$stats = '<li class="next"><a href="'.WEB_ROOT .'admin/mod_reservation/controller.php?action=confirm&code='.$res->CONFIRMATIONCODE.
		'">Confirmar &rarr;</a></li>';
		}

 

?>
<div class="container">

<div class="row">
          <!-- left column -->
<div class="col-md-12 " >
 <div class="card card-primary">
		        	<div class="card-header">
                <h3 class="card-title">Información del  Huespéd</h3>
              </div>
          <div class="box box-solid">
            <div class="box-body no-padding">
              <ul class="">
                <li class="active"><a></i> NOMBRE : 
                  <span class="pull-right"><?php echo $res->G_FNAME; ?></span></a></li><br>
                <li class="active"><a><i class="fa fa-envelope-o"></i> APELLIDOS :
                <span class="pull-right"><?php echo $res->G_LNAME; ?></span></a></li><br>
                <li class="active"><a><i class="fa fa-file-text-o"></i> DIRECCION : 
                <?php echo $res->G_ADDRESS; ?> </a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>

  </div> 


          <!-- left column -->
<div class="row">
          <!-- left column -->
<div class="col-md-6">
       
          <h1 class="page-header"> Ver habitaciones reservadas
          </h1> 
        
        
        <!-- /.row --> 
      <?php

      $query="SELECT * 
              FROM  `tblreservation` r,  `tblguest` g,  `tblroom` rm, tblaccomodation a
              WHERE r.`ROOMID` = rm.`ROOMID` 
              AND a.`ACCOMID` = rm.`ACCOMID` 
              AND g.`GUESTID` = r.`GUESTID`  AND r.`STATUS`<>'Cancelled'
              AND  `CONFIRMATIONCODE` = '".$code."'";
      $mydb->setQuery($query);
      $res = $mydb->loadResultList();

      foreach ($res as $cur) {
      $image = WEB_ROOT . 'admin/mod_room/'.$cur->ROOMIMAGE;	
      $day=dateDiff(date($cur->ARRIVAL),date($cur->DEPARTURE));

      ?>
              <img class="img-responsive img-hover" src="<?php echo $image ; ?>" alt=""> 
</div>
 <!-- right column -->
            <div class="col-md-6">
                <div class="box box-solid">
                <ul class="nav nav-pills nav-stacked">
                  <li><h3>
                        <?php echo $cur->ROOM; ?> [ <small><?php echo $cur->ACCOMODATION; ?></small> ]
                    </h3>
                    </li>
                    <li></li>
                </ul>  
                    <p><strong>LLEGADA: </strong><?php echo date_format(date_create($cur->ARRIVAL),'m/d/Y');?></p>
                    <p><strong>SALIDA: </strong><?php echo date_format(date_create($cur->DEPARTURE),'m/d/Y'); ?></p>
                    <p><strong>NOCHE(s): </strong><?php echo ($day==0) ? '1' : $day; ?></p>
                    <p><strong>PRECIO: </strong>$<?php echo $cur->RPRICE; ?></p>
                    <!-- <a class="btn btn-danger" href="<?php echo WEB_ROOT .'admin/mod_reservation/controller.php?id='.$cur->RESERVEID.'&action=cancelroom'; ?>">Cancel<i class="fa fa-angle-right"></i></a> -->
                </div>
           </div>
        </div>
        <!-- /.row -->
        <hr>
       <?php } 
       ?>
      </div>
        <!-- Pager -->
      
    </div>
        <!-- footer -->
            <div class="card-footer">
                  <div class="row">
                      <ul class="pager">
                          <li class="previous"><a href="<?php echo WEB_ROOT .'admin/mod_reservation/index.php'; ?>">&larr; Regresar</a>
                          </li>
                        <?php echo $stats; ?>
                      </ul>
                  </div>
            </div> 
        <!-- /.footer -->
        </div> 
        </div>
        </div> 
        <hr>