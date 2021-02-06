
<div class="container">
<div class="wrapper">
 



<form class="form-horizontal well span6" action="controller.php?action=add" method="POST">

	<fieldset>
		<legend>Nueva habitación</legend>
											
          
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ACCOMODATION">Nombre:</label>

              <div class="col-md-8">
              	<input name="deptid" type="hidden" value="">
                 <input class="form-control input-sm" id="ACCOMODATION" name="ACCOMODATION" placeholder=
									  "habitación" type="text" value="">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ACCOMDESC">Descripción:</label>

              <div class="col-md-8">
                   <input class="form-control input-sm" id="ACCOMDESC" name="ACCOMDESC" placeholder=
									  "Descripción" type="text" value="">
              </div>
            </div>
          </div>

		 <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "idno"></label>

              <div class="col-md-8">
                <button class="btn btn-primary" name="save" type="submit" >Agregar</button>
              </div>
            </div>
          </div>

			
	</fieldset>	


</form>


</div><!--End of container-->
			

</div>
</div>