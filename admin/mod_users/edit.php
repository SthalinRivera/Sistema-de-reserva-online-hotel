<?php

$_SESSION['id']=$_GET['id'];
$user = new User();
$res = $user->single_user($_SESSION['id']);


 
?>
<div class="container">
<form class="form-horizontal well span6" action="controller.php?action=edit" method="POST">

<div class="card card-primary">
			<div class="card-header">
                <h3 class="card-title">Editar Usuarios</h3>
              </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "UNAME">Nombre:</label>

              <div class="col-md-8">
              	<input name="USERID" type="hidden" value="<?php echo $res->USERID; ?>">
                 <input class="form-control input-sm" id="UNAME" name="UNAME" placeholder=
									  "Account Name" type="text" value="<?php echo $res->UNAME; ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "USERNAME">Nombre de Usuario:</label>

              <div class="col-md-8"> 
                 <input class="form-control input-sm" id="USERNAME" name="USERNAME" placeholder=
									  "Username" type="text" value="<?php echo $res->USER_NAME; ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "UPASS">Password:</label>

              <div class="col-md-8">
              	<input name="deptid" type="hidden" value="">
                 <input class="form-control input-sm" id="UPASS" name="UPASS" placeholder=
									  "Password" type="Password" value="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ROLE">Rol:</label> 
              <div class="col-md-8">
                <select class="form-control input-sm" name="ROLE" id="ROLE">
                  <option <?php echo ($res->ROLE=='Administrator') ? 'SELECTED' : '';  ?> value="Administrator">Administrator</option>
                  <option <?php echo ($res->ROLE=='Guest In-charge') ? 'SELECTED' : ''; ?> value="Guest In-charge">Guest In-charge</option>
                 </select> 
              </div>
            </div>
          </div>

        <div class="form-group">
          <div class="col-md-8">
            <label class="col-md-4 control-label" for=
            "Contact #:">Contacto #::</label>

            <div class="col-md-8">
              <input name="deptid" type="hidden" value="">
               <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder=
                  "Contact #:" type="text" value="<?php echo $res->PHONE; ?>">
            </div>
          </div>
        </div>

		  <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "idno"></label>

              <div class="col-md-8">
                <button class="btn btn-primary" name="Save" type="submit" >Guardar</button>
              </div>
            </div>
          </div>

</div>
	
</form>
</div>