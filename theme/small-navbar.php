<div class="estatic">
<div  id="menuSm"  class="navbar navbar-fixed-top  navbar-inverse">   
    <div class="navbar-collapse ">
      <div class="sm-ul navbar-custom-menu "> 
       
          <ul class=" navbar-nav  tooltip-demo d-flex flex-row align-items-center justify-content-start pull-right">
            
          
          <li>
              <a  data-toggle="tooltip" data-placement="bottom"   title="Booking Cart"  href="<?php echo WEB_ROOT.'booking/index.php';  ?>" class="mx-1"> 
               <i class="fa fa-shopping-cart fa-fw"></i> <span class="px-1"><?php echo  isset($cart) ? $cart : '' ; ?></span>
             </a>
            </li>
  
            <?php if (isset($_SESSION['GUESTID'])) {
     
             $sql = "SELECT count(*) as MSG FROM `tblpayment` WHERE STATUS<>'Pending'  AND  `MSGVIEW`=0 AND `GUESTID`=" . $_SESSION['GUESTID'];
             $mydb->setQuery($sql);
              $res = $mydb->executeQuery(); 

               $msgCnt = mysqli_fetch_assoc($res);
              ?>
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle mx-1" data-toggle="dropdown" >
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success px-1"><?php echo $msgCnt['MSG'] ; ?></span> 
            </a>
            <ul class="dropdown-menu">
              
              <li class="header">Tienes <?php echo $msgCnt['MSG'] ; ?> Mensajes</li>
              <?php 
                $sql = "SELECT  *  FROM `tblpayment` WHERE STATUS<>'Pending' AND `MSGVIEW`=0 AND `GUESTID`=" . $_SESSION['GUESTID'];
                $mydb->setQuery($sql);
                $res = $mydb->executeQuery(); 
                while ($row = mysqli_fetch_array($res)){
               ?>
              <li> 
                <ul class="">
                  
                  <li> 
                    <a  class="read" href="<?php echo WEB_ROOT ;  ?>guest/readmessage.php?code=<?php echo  $row['CONFIRMATIONCODE']; ?>" data-toggle="lightbox"   data-id="<?php echo  $row['CONFIRMATIONCODE']; ?> " >
                      <div class="pull-left">
                      <img class="profile-user-img img-fluid img-circle" src="/marimar/admin/adminLTE/dist/img/user4-128x128.jpg" alt="User profile picture">
                      </div>
                      <h4>
                        Admin 
                      </h4>
                      <p>Reservación ya esta <?php echo   $row['STATUS']; ?>.. </p> 
                    </a>
                  </li>
                </ul>
              </li> 
              <?php } ?>
            </ul>
          </li>

<?php 
$g = New Guest() ;
$result = $g->single_guest($_SESSION['GUESTID']);

?> 
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
            <i class="fa fa-user fa-fw"></i><?php echo $_SESSION['name']. ' ' . $_SESSION['last']; ?> 
            </a>
           
            <ul class="dropdown-menu nav nav-stacked">  
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="img-fluid" style="cursor:pointer;width:200px;height:100px;padding:0;"  data-target="#myModal" data-toggle="modal" src="<?php echo WEB_ROOT. $result->LOCATION;  ?>" alt="User Avatar">
                    </div> 
                    <h3 class="profile-username text-center"> <?php echo $_SESSION['name']. ' ' . $_SESSION['last']; ?>  </h3>
                </div>
						<div class="dropdown-divider"></div>
            <li class="widget-user-header profilefrom ">
              </li> 
                <li><a style="color:#000;text-align:left;border-bottom:1px solid #fff;"
                    href="<?php echo WEB_ROOT ;  ?>guest/profile.php" data-toggle="lightbox" >Mi cuenta </a></li> 
                <li><a style="color:#000;text-align:left;border-bottom:1px solid #fff;" 
                href="<?php echo WEB_ROOT ;  ?>guest/bookinglist.php" data-toggle="lightbox">Reservaciones </a></li>
                <li><a style="color:#000;text-align:left;border-bottom:1px solid #fff;" href="<?php echo WEB_ROOT.'logout.php';  ?>">Cerrar sesión </a></li> 
              </ul>
              </li>
            

          

          
          <?php }else { ?>

            
            <li><a     data-target="#LoginModal" data-toggle="modal"  title="Login Guest"  href="">Iniciar sesión
             </a>
             </li>
        <?php  } ?> 
          </ul>
        <style>
        #social{
          color: blanchedalmond;
          padding-right: 23px;
        }
      </style>
          <!-- Social -->
                      <ul id="social" class="d-flex flex-row align-items-center justify-content-start">
                        <li><a id="social" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a id="social" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                       
                      </ul>
                
       
      </div>
       
      </div> 
</div>   
</div>
 <!-- Modal photo -->
          <div class="modal fade" id="LoginModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal" type=
                  "button">×</button> 
                </div> 

                                  
                <form action="" method="post"> 
                  <div class="modal-body">
                    <div class="form-group"> 
                        <div class="col-md-12"> 
                        <div id="ErrorMessage" style="background-color:red;color:#fff;" ></div> 
                                   <div class="form-group">
                                      <div class="col-md-12"> 
                                        <label class="control-label" for=
                                        "U_USERNAME">E-Mail / Usuairio:</label> 
                                              <input   id="U_USERNAME" name="U_USERNAME" placeholder="Correo / Usuario" type="text" class="form-control input" >  
                                      </div> 
                     
                                      <div class="col-md-12">
                                        <label class="control-label" for=
                                        "U_PASS">Contraseña:</label> 
                                         <input name="U_PASS" id="U_PASS" placeholder="Contraseña" type="password" class="form-control input ">
                                 
                                      </div> 
                                      </div>  
                      </div> 
                  </div> 
                </div>
                  <div class="modal-footer">  
                         <button type="button" name="btnLogin" class="btnLoginModal button">Iniciar sesión</button> 
                  </div>  
                 </form>  
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
 
 


 
 