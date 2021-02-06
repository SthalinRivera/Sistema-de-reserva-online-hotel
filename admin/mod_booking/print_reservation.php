<!DOCTYPE html>
<?php require_once("../includes/initialize.php"); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>style.css">  
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/responsive.css">    

<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/bootstrap.css">  

<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>fonts/css/font-awesome.min.css"> 


<!-- DataTables CSS -->
<!-- <link href="<?php echo WEB_ROOT; ?>css/dataTables.bootstrap.css" rel="stylesheet"> -->
 
 <link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 <link href="<?php echo WEB_ROOT; ?>css/datepicker.css" rel="stylesheet" media="screen">

 <link href="<?php echo WEB_ROOT; ?>css/galery.css" rel="stylesheet" media="screen">
</head>
<body onload="window.print();">


<?php

if (!isset($_SESSION['dragonhouse_cart'])) {
  # code...
  redirect(WEB_ROOT.'index.php');
}


if (isset($_POST['profileCheck'])) {
  # code...
    unset($_SESSION['pay']);
   unset($_SESSION['dragonhouse_cart']);
}

/*$guestid =$_GET['guestid'];
$guest = new Guest();
$result=$guest->single_guest($guestid);*/

  $name = $_SESSION['name']; 
  $last = $_SESSION['last'];
  // $country =$_SESSION['country'];
  $city = $_SESSION['city'] ;
  $address = $_SESSION['address'];
  $zip =  $_SESSION['zip'] ;
  $phone = $_SESSION['phone'];
  // $email = $_SESSION['email'];
  // $password =$_SESSION['pass'];
  $stat = $_SESSION['pending'];

?>


<div id="accom-title"  > 
    <div  class="pagetitle">   
            <h1  >detalles de la reserva
                 
            </h1> 
       </div> 
  </div>

    <form action="index.php?view=payment" method="post"  name="" >
         
            
           <p>
            <? print(Date("l F d, Y")); ?>
            <br/><br/>
           Sir/Madam <?php echo $name.' '.$last;?> <br/>
           <?php echo $address;?><br/>
           <?php echo $phone;?> <br/>
           <!-- <?php echo $email;?><br/><br/> -->
           Querido señor, señora. <?php echo $last;?>,<br/><br/>
           Saludos desde Hospedaje el Pacífico!<br/><br/>
           Por favor verifique los detalles de su reservación:<br/><br/>
           <strong>NOMBRE (S) DE INVITADO:</strong> <?php echo $name.' '.$last;?>


          </p>

        <table class="table table-hover" style="font-size:11px">
                  <thead>
              <tr  bgcolor="#999999">
              <!-- <th width="10">#</th> -->
              <th align="center" width="120">Tipo de Habitación</th>
               <th align="center" width="120">Check In</th>
                <th align="center" width="120">Check Out</th>
                 <th align="center" width="120">Noches</th>
              <th  width="120">Price</th>
               <th align="center" width="120">Habitación</th>
              <th align="center" width="90">Cantidad</th>
           
              
         
            </tr> 
          </thead>
          <tbody>
          
            <?php




             $arival   = $_SESSION['from']; 
              $departure = $_SESSION['to']; 
              $days = dateDiff($arival,$departure);
              $count_cart = count($_SESSION['dragonhouse_cart']);

                for ($i=0; $i < $count_cart  ; $i++) {    
              $mydb->setQuery("SELECT * FROM `tblroom` r, `tblaccomodation` a WHERE  r.`ACCOMID`=a.`ACCOMID` AND `ROOMID` =". $_SESSION['dragonhouse_cart'][$i]['dragonhouseroomid']);
              $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<tr>'; 
              // echo '<td></td>';
              echo '<td>'. $result->ROOM.' '. $result->ACCOMODATION.'</td>';
              echo '<td>'.$_SESSION['dragonhouse_cart'][$i]['dragonhousecheckin'].'</td>';
              echo '<td>'.$_SESSION['dragonhouse_cart'][$i]['dragonhousecheckout'].'</td>';
              echo '<td>'.$_SESSION['dragonhouse_cart'][$i]['dragonhouseday'].'</td>';
              echo '<td> &euro;'. $result->PRICE.'</td>';
               echo '<td >1</td>';
                echo '<td >&euro;'. $_SESSION['dragonhouse_cart'][$i]['dragonhouseroomprice'].'</td>';
        

              
              echo '</tr>';
            } 


          }
           $payable= $result->PRICE *$days;
           $_SESSION['pay']= $payable;
            ?>
          </tbody>
          <tfoot>
               <tr>
                   <td colspan="5"></td><td align="right"><h5><b>Total del pedido: </b></h5>
                   <td align="left">
                  <h5><b> <?php echo '&euro;' . $payable= $days*$result->PRICE; ?></b></h5>
                                   
                  </td>
          </tr>
      
         
          </tfoot>  
        </table>

    
<p>Esperamos ansiosamente su llegada y nos gustaría informarle de lo siguiente para ayudarlo con la planificación de su viaje. <b><?php echo $_SESSION['confirmation']?>:</b>
<br/><br/>Si hubiera alguna inquietud con su reserva, un representante de servicio al cliente se comunicará con usted. De lo contrario, considere su reserva confirmada.</p>
<ul>
 
 <li>No se permiten mascotas.</li>
 <li>Se permiten alimentos del exterior dentro de la casa de huéspedes..</li>
 <li>La hora de entrada es a las 13:00 y la hora de salida es a las 12 del mediodía.</li>
 <li>Los huéspedes que lleguen antes de las 13.00 horas serán alojados si las habitaciones están vacías y listas.</li>
 <li>Acceso WIFI gratuito.</li>
 <li>Las tarifas de las habitaciones incluyen impuestos gubernamentales y cargos por servicio.</li>
 <li>Rates are subject to change without prior notice.</li>
 <li>Cancellation notification must be made at least 10 days prior to arrival for refund of deposits. Cancellation received within the 10 days period will result to forfeiture of full deposits.</li>
 <li>We serve Breakfast, Lunch and Dinner upon request with 2 hours notice.</li><br>
<strong>He acordado presentar los siguientes documentos al momento del check in:</strong><br/>
 <li>Copia del pago BDO.</li>
 <li>Carta de autorización emitida por el pagador de BDO para los huéspedes cuyas transacciones se pagaron en su nombre.</li>
 </ul>
 Si tiene alguna pregunta, envíe un correo electrónico a dragonhouse.com o llame al (034) 4713-135
<br/><br/>
Gracias por elegir Hospedaje el Pacífico.
<br/><br/>



 
</form>
</body>
</html>