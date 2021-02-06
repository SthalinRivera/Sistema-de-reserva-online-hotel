<?php

$_SESSION['id']=$_GET['id'];
$guest = new Guest();
$result = $guest->single_guest($_SESSION['id']);


 
?>
<div class="container">
<form class="form-horizontal well span6" action="controller.php?action=edit" method="POST">

<div class="card card-primary">
			<div class="card-header">
                <h3 class="card-title">Editar Huspedes</h3>
              </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="G_FNAME">Nombre:</label>
              <div class="col-md-8">
              	<input name="USERID" type="hidden" value="<?php echo $result->GUESTID; ?>">
                 <input class="form-control input-sm" id="G_FNAME" name="G_FNAME" placeholder=
									  "" type="text" value="<?php echo $result->G_FNAME; ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="G_LNAME">Apellidos:</label>
              <div class="col-md-8"> 
                 <input class="form-control input-sm" id="G_LNAME" name="G_LNAME" placeholder=
									  "" type="text" value="<?php echo $result->G_LNAME; ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="G_ADDRESS">Direccion:</label>
              <div class="col-md-8"> 
                 <input class="form-control input-sm" id="G_ADDRESS" name="G_ADDRESS" placeholder=
									  "" type="text" value="<?php echo $result->G_ADDRESS; ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="DBIRTH">F.Nacimiento:</label>
              <div class="col-md-8"> 
                 <input class="form-control input-sm" id="DBIRTH" name="USERNAME" placeholder=
									  "" type="text" value="<?php echo $result->DBIRTH; ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="G_PHONE">Celular:</label>
              <div class="col-md-8"> 
                 <input class="form-control input-sm" id="G_PHONE" name="G_PHONE" placeholder=
									  "" type="text" value="<?php echo $result->	G_PHONE; ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="G_EMAIL">Email:</label>
              <div class="col-md-8"> 
                 <input class="form-control input-sm" id="G_EMAIL" name="G_EMAIL" placeholder=
									  "" type="text" value="<?php echo $result->G_EMAIL; ?>">
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