<?php 

if (!isset($_SESSION['dragonhouse_cart'])) {
  # code...
  redirect(WEB_ROOT.'index.php');
}



 ?> 
 
           <h1 style="display: inline-block;">Inicio de sesión</h1>
              <a style="display: inline-block;" href="personalinfo.php" data-title=" RegistrarteRegistro de nuevo Huésped" data-toggle="lightbox">  Registrarme</a> 
       
                      <form action="<?php echo  WEB_ROOT."login.php" ?>" method="post">
                        <div class="form-group">
                            <div class=""> 
                              <label class="control-label" for=
                              "Username">Correo electrónico / Usuario:</label> 
                                    <input   id="username" name="username" placeholder="Correo electrónico / Usuario:" type="text" class="form-control input"  style="width: 100%">  
                            </div> 
           
                            <div class="">
                              <label class="control-label" for=
                              "pass">Contraseña:</label> 
                               <input name="pass" id="pass" placeholder="Contraseña" type="password" class="form-control input " style="width: 100%"> 
                            </div> 
                        </div>  
                      
                        <button type="submit" name="gsubmit" class="button">Iniciar sesión</button> 
                        </form>   
                   
 

<br>
 

 <?php
 

function listofbooking(){



$payable = 0;
if (isset( $_SESSION['dragonhouse_cart'])){ 
$count_cart = count($_SESSION['dragonhouse_cart']);

?>
      <!-- list -->
<div class="row">
<div class="col-md-4">

     <div style="overflow:scroll;  height:300px;">


<?php

for ($i=0; $i < $count_cart  ; $i++) {  

  $query = "SELECT * FROM `tblroom` r ,`tblaccomodation` a WHERE r.`ACCOMID`=a.`ACCOMID` AND ROOMID=" . $_SESSION['dragonhouse_cart'][$i]['dragonhouseroomid'];
   $mydb->setQuery($query);
   $cur = $mydb->loadResultList(); 
    foreach ($cur as $result) { 


?>             
      
        <div class="row"> 
          <div class="col-md-12">
             <div class="panel panel-default">
                <div class="panel-heading">
                <!-- <h4>Payment</h4> -->
                </div>
                <div class="panel-body">

                    <div class="col-md-12">
                      <label>Habitación:</label><br/>
                      <?php echo  $result->ROOM.' '. $result->ROOMDESC; ?>
                    </div>
                   
                    <div class="col-md-6">
                      <label>Llegada:</label>
                      <?php echo  date_format(date_create( $_SESSION['dragonhouse_cart'][$i]['dragonhousecheckin']),"m/d/Y"); ?>
                    </div> 

                    <div class="col-md-6">
                       <label>Salida:</label>
                      <?php echo  date_format(date_create( $_SESSION['dragonhouse_cart'][$i]['dragonhousecheckout']),"m/d/Y"); ?>
                    </div>   
                  
 
                      <div class="col-md-12" style="float:left;border-top:1px solid #000;">
                          <label>Resumen</label> 
                      </div>
                
                      <div style="float:right">  

                          <div class="col-md-12"  >
                              <label>Precio:</label>
                            <?php echo  ' &#8369 '. $result->PRICE; ?>
                         </div> 

                         <div class="col-md-12"  >
                              <label>Dias:</label>
                            <?php echo   $_SESSION['dragonhouse_cart'][$i]['dragonhouseday']; ?>
                         </div> 

                         <div class="col-md-12" >
                              <label>Total:</label>
                            <?php echo ' &#8369 '.   $_SESSION['dragonhouse_cart'][$i]['dragonhouseroomprice']; ?>
                         </div> 

                      </div>    
                      
                 </div>

                 <div class="panel-footer">
                   
                 </div>
              </div>   

          </div>
        </div> 
  <?php 
    }

                      $payable += $_SESSION['dragonhouse_cart'][$i]['dragonhouseroomprice'] ;
  }
                      $_SESSION['pay'] = $payable;
}
?>
      <div class="col-md-12" >
      <div class="row">
          <label style="float:left">Precio total</label> <h2 style="float:right"> &#8369 <?php echo   $_SESSION['pay'] ;?></h2> 
      </div>
        </div>


  </div>  
    
  </div>  
</div>
      <!-- end list -->
    

<?php 
}
 ?>

