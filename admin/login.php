<?php
require_once("../includes/initialize.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Dragon House</title>

    <!-- Bootstrap core CSS -->
    
    <?php include 'links.php' ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="Background:url('../images/background_login.jpg') repeat;"  class="hold-transition login-page" >


<?php
 if (admin_logged_in()) {
?>
   <script type="text/javascript">
            redirect('progressbar.php');
    </script>
    <?php
}
if (isset($_POST['btnlogin'])) {
    //form has been submitted1
    
    $uname = trim($_POST['email']);
    $upass = trim($_POST['pass']);
    
    $h_upass = sha1($upass);
    //check if the email and password is equal to nothing or null then it will show message box
    if ($uname == '' OR $upass == '') {
?>    <script type="text/javascript">
                alert("Nombre de usuario y contraseña inválidos!");
                </script>
            <?php
        
    } else {
    //it creates a new objects of member
        $user = new User();
    //make use of the static function, and we passed to parameters
    $res = $user::AuthenticateUser($uname, $h_upass);
    //then it check if the function return to true
    if($res == true){
      ?>   <script type="text/javascript">
          //then it will be redirected to home.php
          window.location = "index.php";
        </script>
      <?php
    
    
    } else {
?>    <script type="text/javascript">
                alert("¡Nombre de usuario o contraseña no registrados! Póngase en contacto con su administrador.");
                window.location = "index.php";
                </script>
        <?php
        }
        
    }
} else {
    
    $email = "";
    $upass = ""; 
}

?> 

<div class="login-box" style="background-color: #034626;">
  <div class="login-logo">
    <a href="<?php echo WEB_ROOT;?>admin/login.php"><b class="text-light">Hospedaje Pacifico</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Iniciar sesión</p>

      <form action="login.php" role="form" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="email" placeholder="Email/Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="pass" type="password" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input name="remember" type="checkbox" id="remember">
              <label for="remember">
                Recordarme
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="btnlogin" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>

      </form>


      
    </div>
    <!-- /.login-card-body -->
  </div>
  
</div>
<a href="<?php echo WEB_ROOT;?>index.php"><b class="text-light">Ir a portada</b></a>
  </body>
</html>
