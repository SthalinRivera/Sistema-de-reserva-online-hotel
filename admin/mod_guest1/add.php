<?php 

if (isset($_POST['submit'])){
  
   @$_SESSION['name']   		= $_POST['name'];
   @$_SESSION['last']   		= $_POST['last'];
   @$_SESSION['dbirth']   		= $_POST['dbirth'];
   @$_SESSION['nationality']   = $_POST['nationality'];
   @$_SESSION['city']   		= $_POST['city'];
   @$_SESSION['address'] 		= $_POST['address'];
   @$_SESSION['company']  		= $_POST['company'];
   @$_SESSION['caddress']  	= $_POST['caddress'];
   @$_SESSION['zip']   		= $_POST['zip'];
   @$_SESSION['phone']   		= $_POST['phone'];
   @$_SESSION['cemail']		= $_POST['cemail'];
   @$_SESSION['username']		= $_POST['username'];
   @$_SESSION['pass']  		= $_POST['pass'];
   @$_SESSION['pending']  		= 'pending';
  
  }
?>



<div class="container">
    <form class="form-horizontal well span6" action="controller.php?action=add" method="POST">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Agregar Usuario</h3>
            </div>


         

            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="G_FNAME">Nombres:</label>

                    <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input class="form-control input-sm" id="G_FNAME" name="G_FNAME" placeholder="Nombres"
                            type="text" value="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="G_LNAME">Apellidos:</label>
                    <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input class="form-control input-sm" id="G_LNAME" name="G_LNAME" placeholder="Apellidos"
                            type="text" value="">
                    </div>
                </div>
            </div>

          

            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="G_ADDRESS">Direccion:</label>
                    <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input class="form-control input-sm" id="G_ADDRESS" name="G_ADDRESS"
                            placeholder="Lima, Las  Flores .." type="text" value="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="DBIRTH">F.Nacimiento:</label>
                    <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input class="form-control input-sm" id="DBIRTH" name="DBIRTH" placeholder="Fecha de nacimiento" type="date"
                            value="">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="G_PHONE">Numero:</label>
                    <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input class="form-control input-sm" id="`G_PHONE" name="G_PHONE" placeholder="+91 973 232 311"
                            type="number" value="">
                    </div>
                </div>
            </div>
         
            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="G_ADDRESS">Direccion:</label>
                    <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input class="form-control input-sm" id="G_ADDRESS" name="G_ADDRESS"
                            placeholder="Lima, Las  Flores .." type="text" value="">
                    </div>
                </div>
            </div>
         

            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="G_EMAIL">Email:</label>
                    <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input class="form-control input-sm" id="G_EMAIL" name="G_EMAIL" required
                            placeholder="Ej: nombre@dominio.com" type="email" value="">
                    </div>
                </div>
            </div>
         <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="	G_UNAME">G_UNAME:</label>
                    <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input class="form-control input-sm" id="G_UNAME" name="G_UNAME"
                            placeholder="Ej:Arturo2020" type="text" value="">
                    </div>
                </div>
            </div>
         
           
          
           
            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="idno"></label>

                    <div class="col-md-8">
                        <button class="btn btn-primary" name="save" type="submit">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

        </fieldset>

    </form>
</div>