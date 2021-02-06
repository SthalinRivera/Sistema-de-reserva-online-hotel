
<?php


if(isset($_GET['id'])){
    removetocart($_GET['id']);
}

 
 if (isset($_POST['clear'])){
   unset($_SESSION['pay']);
   unset($_SESSION['dragonhouse_cart']);
   message("El carro esta vacio.","success");
  redirect(WEB_ROOT."booking/");

 }

 check_message();
 
?>
<style>
  .reservestyle{
    padding-top: 20px;
    padding-bottom: 20px;
   
  }
</style>
 <div class="reservestyle">


  <div id="accom-title"  > 
    <div  class="pagetitle">   
            <h1  >Su carrito de reservas
                 
            </h1> 
     </div> 
  </div>
 
          <table class="table" id="table">

             <thead>
              <tr  bgcolor="#00a65a">
              <!-- <th width="10">#</th> -->
              <th align="center" width="120">Habitación</th>
              <th align="center" width="120">Entrada</th>
              <th align="center" width="120">Salida</th> 
              <th  width="120">Precio</th> 
              <th align="center" width="120">Noches</th> 
              <th align="center" >Cantidad</th>
              <th align="center" width="90">Accion</th> 
            </tr> 
          </thead>
          <tbody >
              <div id="showcart"></div>

              <div id="BookingCart">
            <?php 
            $mealprice = isset($_SESSION['MealPrice']) ? $_SESSION['MealPrice'] : '0';
             $payable = 0;
            if (isset( $_SESSION['dragonhouse_cart'])){


             $count_cart = count($_SESSION['dragonhouse_cart']);

                for ($i=0; $i < $count_cart  ; $i++) {  

                    $query = "SELECT * FROM `tblroom` r ,`tblaccomodation` a WHERE r.`ACCOMID`=a.`ACCOMID` AND ROOMID=" . $_SESSION['dragonhouse_cart'][$i]['dragonhouseroomid'];
                     $mydb->setQuery($query);
                     $cur = $mydb->loadResultList(); 
                      foreach ($cur as $result) { 

 
                         echo '<tr>'; 
                        // echo '<td></td>';
                        echo '<td>'. $result->ROOM.' '. $result->ROOMDESC.' </td>';
                        echo '<td>'.date_format(date_create( $_SESSION['dragonhouse_cart'][$i]['dragonhousecheckin']),"m/d/Y").'</td>';
                        echo '<td>'.date_format(date_create( $_SESSION['dragonhouse_cart'][$i]['dragonhousecheckout']),"m/d/Y").'</td>';
                        echo '<td > S/.'. $result->PRICE.'
                          <input type="hidden" value="'.$result->PRICE.'"  name="roomprice'.$_SESSION['dragonhouse_cart'][$i]['dragonhouseroomid'].'" id="roomprice'.$_SESSION['dragonhouse_cart'][$i]['dragonhouseroomid'].'"/>

                        </td>'; 
                        echo '<td><input style="border:0px" readonly type="number" value="'.$_SESSION['dragonhouse_cart'][$i]['dragonhouseday'].'" id="day'.$_SESSION['dragonhouse_cart'][$i]['dragonhouseroomid'].'" name="day'.$_SESSION['dragonhouse_cart'][$i]['dragonhouseroomid'].'" /></td>';
                        
                        echo  '<input type="hidden"  name="MealPrice'.$_SESSION['dragonhouse_cart'][$i]['dragonhouseroomid'].'" id="MealPrice'.$_SESSION['dragonhouse_cart'][$i]['dragonhouseroomid'].'"/>';
                        echo '</td>';
                        echo '<td>S/.<output id="TotAmount'.$_SESSION['dragonhouse_cart'][$i]['dragonhouseroomid'].'" >'.$_SESSION['dragonhouse_cart'][$i]['dragonhouseroomprice'].'</output></td>';
                        echo '<td ><a href="index.php?view=processcart&id='.$result->ROOMID.'">Eliminar</td>';
 
                      } 


                      $payable += $_SESSION['dragonhouse_cart'][$i]['dragonhouseroomprice'] ;


 

                 
                }

                $_SESSION['pay'] = $payable;
              
              } 
            ?>
            </div>
          </tbody>

          <tfoot>
            <tr>
           <td colspan="6"><h4 align="right">Total:</h4></td>
           <td colspan="4">
             <h4><b>S/.<span id="sum"><?php  echo isset($_SESSION['pay']) ?  $_SESSION['pay'] :'Your booking cart is empty.';?></span></b></h4>
                         
            </td>
            </tr>
          </tfoot>  
        </table> 
 
        <form method="post" action="">
             <div class="row" >
             <?php
             if (isset($_SESSION['dragonhouse_cart'])){
              ?> 
                 <button type="submit" class="button "name="clear">Vaciar carrito</button> 
             <?php
             
              if (isset($_SESSION['GUESTID'])){
                ?>
                <div  class="button " ><a href="<?php echo WEB_ROOT; ?>booking/index.php?view=payment" name="continue">Continuar reservando</a></div>
               <?php 
              }else{ ?>
                 <div  class="button " ><a href="<?php echo WEB_ROOT; ?>booking/index.php?view=logininfo"  name="continue">Continuar reservando</a></div>
             <?php
              }
            }

             ?>
     
               
          </div>
                  
        </form>
       <?php
       unset($_SESSION['MealPrice']);
       ?>
</div>
       