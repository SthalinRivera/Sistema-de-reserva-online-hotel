<?php
if(isset($_POST['avail'])){
  
$_SESSION['from'] = $_POST['from'];
$_SESSION['to']  = $_POST['to'];

  redirect(WEB_ROOT. "index.php?page=5");
}

?>

 
 <!DOCTYPE html>
<html lang="es">
<head>
<title>Hospedaje el Pacífico</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="Hospedaje el Pacífico" content="Hospedaje El Pacífico - Cañete - Lima - Perú">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="<?php echo WEB_ROOT;?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/animate.css">
<link href="<?php echo WEB_ROOT;?>plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/custom-navbar.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT;?>theme/stylefrom.css">
 <link href="<?php echo WEB_ROOT; ?>styles/ekko-lightbox.css" rel="stylesheet">

 <link href="<?php echo WEB_ROOT; ?>styles/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 <link href="<?php echo WEB_ROOT; ?>styles/datepicker.css" rel="stylesheet" media="screen">

<?php
if (isset($_SESSION['dragonhouse_cart'])){
  if (count($_SESSION['dragonhouse_cart'])>0) {
    $cart =  count($_SESSION['dragonhouse_cart'])  ;
  } 
 
} 
if (isset($_SESSION['activity'])){
  if (is_array($_SESSION['activity']) && is_object($_SESSION['activity']) &&count($_SESSION['activity'])>0) {
    $activity = count($_SESSION['activity'])  ;
  } 
 
} 
 ?>
</head>
<body>
 <?php include $small_nav; ?>  
 <br/>
 <!--
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo WEB_ROOT;?>index.php">Hospedaje el Pacífico</a>
  
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a  class="nav-link active" href="<?php echo WEB_ROOT;?>index.php">Inicio</a>
        </li>
          <li>
          <a class="nav-link active" href="<?php echo WEB_ROOT;?>index.php?p=about">Nosotros</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="<?php echo WEB_ROOT;?>index.php?p=rooms">Habitaciones</a>
          </li> 
          <li class="nav-item">
          <a class="nav-link active" href="<?php echo WEB_ROOT;?>index.php?p=contact">Contacto</a>
          </li>
      </ul>
    </div>
  </div>
</nav>-->
<div class="super_container">
  <!-- Navbar -->
  <header class="header"> 
    <a class="navbar-brand" href="#"><p class="text-light">  Hospedaje el Pacífico</p>    </a>
    <div class=" d-flex flex-column align-items-center justify-content ">     
      <!-- Logo -->
     
      <!-- Main Nav -->
      <nav class="main_nav">
        <ul class="d-flex flex-row align-items-center justify-content-start">
           <li><a href="<?php echo WEB_ROOT;?>index.php">Inicio</a></li>
          <li><a href="<?php echo WEB_ROOT;?>index.php?p=about">Nosotros</a></li>
          <li><a href="<?php echo WEB_ROOT;?>index.php?p=rooms">Habitaciones</a></li> 
          <li><a href="<?php echo WEB_ROOT;?>index.php?p=contact">Contacto</a></li>
        </ul>
      </nav>
      <!-- Header Right -->
      <div class="header_right d-flex flex-row align-items-center justify-content-start">
      </div>    
  </header>
  <!-- Logo Overlay 

  <div class="logo_overlay">
    <div class="logo_overlay_content d-flex flex-column align-items-center justify-content-center">
      <div class="logo"><a href="#"><img src="<?php echo WEB_ROOT;?>images/logo_3.png" alt=""></a></div>
    </div>
  </div>-->

  <!-- Menu Overlay -->

  <div class="menu_overlay">
    <div class="menu_overlay_content d-flex flex-row align-items-center justify-content-center">
      
      <!-- Hamburger Button -->
      <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

    </div>
  </div>

  <!-- Menu -->

  <div class="menu">
    <div class="menu_container d-flex flex-column align-items-center justify-content-center">

      <!-- Menu Navigation -->
      <nav class="menu_nav text-center">
       
        <ul> 
        <li><a href="<?php echo WEB_ROOT;?>index.php">Inicio</a></li>
          <li><a href="<?php echo WEB_ROOT;?>index.php">Inicio</a></li>
          <li><a href="<?php echo WEB_ROOT;?>index.php?p=about">Nostros</a></li>
          <li><a href="<?php echo WEB_ROOT;?>index.php?p=rooms">Habitaciones</a></li> 
          <li><a href="<?php echo WEB_ROOT;?>index.php?p=contact">Contacto</a></li>
        </ul>
      </nav>
      <div class="button menu_button"><a href="<?php echo WEB_ROOT;?>index.php?p=rooms">Reservar ahora!</a></div>
<style>
.social{
  color: black;
}
</style>
      <!-- Menu Social -->
      <div class="social menu_social">
        <ul class="d-flex flex-row align-items-center justify-content-start">
          <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
       
        </ul>
      </div>

    </div>
  </div>

  <!-- Home -->

  <div class="home">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo WEB_ROOT;?>images/background.jpg" data-speed="0.8"></div>
    <div class="home_container d-flex flex-column align-items-center justify-content-center">
      <!-- <div class="home_title"><h1>Reserve su estancia</h1></div>-->
      <div class="home_text text-center"></div>
       <!--  <div class="button home_button"><a href="#">Reservar ahora</a></div>  -->

    </div>
  </div>

  <!-- Booking -->

  <div class="booking">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="booking_container d-flex flex-row align-items-center justify-content-start"> 
            <form action="<?php echo WEB_ROOT;?>index.php?p=booking" method="POST" class="booking_form" autocomplete="off">
              <div class="booking_form_container d-flex flex-lg-row flex-column align-items-start justify-content-start flex-wrap">
                <div class="booking_form_inputs d-flex flex-row align-items-start justify-content-between flex-wrap">
                  <div class="booking_dropdown"><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" name="arrival" required="required" value="<?php echo isset($_POST['arrival']) ? $_POST['arrival'] :date('m/d/Y');?>"></div>
                  <div class="booking_dropdown"><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" name="departure" required="required" value="<?php echo isset($_POST['departure']) ? $_POST['departure'] : date('m/d/Y');?>" ></div>
                  <div class="custom-select">
                    <select name="person" id="person">
                      <option value="0">Persona</option>
                      <?php $sql ="SELECT distinct(`NUMPERSON`) as 'NumberPerson' FROM `tblroom`";
                               $mydb->setQuery($sql);
                             $cur = $mydb->loadResultList(); 
                                foreach ($cur as $result) { 
                                  echo '<option value='.$result->NumberPerson.'>'.$result->NumberPerson.'</option>';
                                }

                            ?>
                    </select>
                  </div>
                  <div class="custom-select">
                          <?php
                         $accomodation = New Accomodation();
                         $cur = $accomodation->listOfaccomodation(); 
                          ?>
                    <select  name="accomodation" id="person">
                      <option value="0">Alojamiento</option>
                      <?php  foreach ($cur as $result) { ?>
                          <option value="<?php echo $result->ACCOMODATION; ?>"><?php echo $result->ACCOMODATION; ?></option>
                          <?php  } ?>
                    </select>
                  </div>
                </div>
                <button class="booking_form_button ml-lg-auto">Reservar ahora</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="rooms">
  <div class="container">
    <?php 
     check_message();
     require_once $content;  
    ?> 
 
  </div>
</div>

 

 
 
  <footer class="footer">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo WEB_ROOT;?>images/footer.jpg" data-speed="0.8"></div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="footer_logo text-center">
            <a href="#"><img src="images/logo.png" alt=""></a>
          </div>
          <div class="footer_content">
            <div class="row">
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-lg-end align-items-center justify-content-start">
                  <div class="text-center">
                    <div>Telefono:</div>
                    <div>+51999583745</div>

                <br>
                    <!-- Social -->
                    <div class="social ">
                      <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-center justify-content-start">
                  <div class="text-center">
                    <div>Dirección:</div>
                    <div>Las Palmas, Distrito de Víctor Larco Herrera 15701</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-lg-start align-items-center justify-content-start">
                  <div class="text-center">
                    <div>Correo Electrónico:</div>
                    <div>hola@Hospedajepacifico.com</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="footer_bar text-center">
           Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los rerechos reservados  <a href="" target="_blank">Hospedaje Pácifico</a>
  </div>
  </footer>
</div>

<script src="<?php echo WEB_ROOT;?>js/jquery-3.3.1.min.js"></script>
<script src="<?php echo WEB_ROOT;?>styles/bootstrap-4.1.2/popper.js"></script>
<script src="<?php echo WEB_ROOT;?>styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/easing/easing.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/progressbar/progressbar.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo WEB_ROOT;?>plugins/jquery-datepicker/jquery-ui.js"></script>
 <script src="<?php echo WEB_ROOT; ?>js/ekko-lightbox.js"></script> 
<script src="<?php echo WEB_ROOT;?>js/custom.js"></script>



<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
</body>
</html>
<!-- Modal photo -->
          <div class="modal fade" id="myModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal" type=
                  "button">×</button>

                  <h4 class="modal-title" id="myModalLabel">Elija Imagen.</h4>
                </div>

                <form action="<?php echo WEB_ROOT; ?>guest/update.php" enctype="multipart/form-data" method=
                "post">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="rows">
                        <div class="col-md-12">
                          <div class="rows">
                            <div class="col-md-8">
                              <input name="MAX_FILE_SIZE" type=
                              "hidden" value="1000000"> <input id=
                              "image" name="image" type=
                              "file">
                            </div>

                            <div class="col-md-4"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type=
                    "button">Cerrar</button> <button class="btn btn-primary"
                    name="savephoto" type="submit">Subir foto</button>
                  </div>
                </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

         

 

  <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover() 
 





  //Validates Personal Info
        function personalInfo(){
        var a=document.forms["personal"]["name"].value;
        var b=document.forms["personal"]["last"].value;
        var c=document.forms["personal"]["city"].value;
        var d=document.forms["personal"]["address"].value;
        var e=document.forms["personal"]["dbirth"].value;  
        var f=document.forms["personal"]["zip"].value; 
        var g=document.forms["personal"]["phone"].value;
        var h=document.forms["personal"]["username"].value;
        var i=document.forms["personal"]["password"].value;


 
         if (document.personal.condition.checked == false)
        {
        alert ('pls. agree the term and condition of this hotel');
        return false;
        }
        if ((a=="Firstname" || a=="") || (b=="lastname" || b=="") || (c=="City" || c=="") || (d=="address" || d=="") || (e=="dateofbirth" || e=="") || (f=="Zip" || f=="") || (g=="Phone" || g=="")|| (h=="username" || h=="") || (j=="password" || j==""))
          {
          alert("all field are required!");
          return false;
          }

        }
</script>


<script type="text/javascript">
   
 $(document).ready(function(){

      $(".btnLoginModal").click(function(){

        var user_name = document.getElementById("U_USERNAME").value;
        var pass = document.getElementById("U_PASS").value;
      
      

       $.ajax({ 
          type:"POST",
          url: "checktoken.php",             
          dataType: "text",   //expect html to be returned  
          data:{username:user_name,password:pass},               
          success: function(data){ 
              $("#ErrorMessage").hide();
             $("#ErrorMessage").fadeIn("slow");                 
             $("#ErrorMessage").html(data);  
             // alert(data);
          } 

             
        });  
    });

    });

</script>
<!--/.container-->
<script language="javascript" type="text/javascript">
        function OpenPopupCenter(pageURL, title, w, h) {
            var left = (screen.width - w) / 2;
            var top = (screen.height - h) / 4;  // for 25% - devide by 4  |  for 33% - devide by 3
            var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
        } 
    </script>
</body>
</html>