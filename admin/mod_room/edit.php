
<?php

// $_SESSION['id']=$_GET['id'];
$rm = new Room();
$result = $rm->single_room($_GET['id']);
?>
<div class="container">
<div class="card card-primary">
<div class="card-header">
      <h3 class="card-title">Editar habitacion</h3>
</div>
<form class="form-horizontal well span6" action="controller.php?action=edit" enctype="multipart/form-data" method="POST">

		
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ROOM">Nombre:</label>

              <div class="col-md-8">
                <input name="" type="hidden" value="">
                 <input name="ROOMID" type="hidden" value="<?php echo $result->ROOMID; ?>">
                 <input class="form-control input-sm" id="ROOM" name="ROOM" placeholder=
                    "Nombre de alojamiento" type="text" value="<?php echo $result->ROOM; ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ACCOMID">Alojamiento:</label>

              <div class="col-md-8">
              <select class="form-control input-sm" name="ACCOMID" id="ACCOMID">  
                <?php 
                  $rm = new Accomodation();  
                 $res =  $rm->single_accomodation($result->ACCOMID);
                ?>

                    <option selected="TRUE" value="<?php echo $res->ACCOMID; ?>"><?php echo $res->ACCOMODATION; ?></option>
                    <?php
                    
                    $cur= $rm->listOfaccomodationNotIn($res->ACCOMID);
                    foreach ($cur  as $accom) {
                      echo '<option  value='.$accom->ACCOMID.'>'.$accom->ACCOMODATION.'</OPTION>';
                    }

                    ?>
                  </select> 
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ROOMDESC">Descripcion:</label>

              <div class="col-md-8">
                <input name="" type="hidden" value="">
                 <input class="form-control input-sm" id="ROOMDESC" name="ROOMDESC" placeholder=
                    "Descripcion" type="text" value="<?php echo $result->ROOMDESC; ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "NUMPERSON">Numero de personas:</label>

              <div class="col-md-8">
                <input class="form-control input-sm" id="NUMPERSON" name="NUMPERSON" placeholder=
                    "Numero de personas" type="text" value="<?php echo $result->NUMPERSON; ?>" onkeyup="javascript:checkNumber(this);">
              </div>
            </div>
          </div>


           <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "PRICE">Precio:</label>

              <div class="col-md-8"> 
                <input class="form-control input-sm" id="PRICE" name="PRICE" placeholder=
                    "Precio" type="text" value="<?php echo $result->PRICE; ?>" onkeyup="javascript:checkNumber(this);">
              </div>
            </div>
          </div>

        
                 <input class="form-control input-sm" id="ROOMNUM" name="ROOMNUM" placeholder=
                    "Room #" type="hidden" value="<?php echo $result->ROOMNUM; ?>">
          
         <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "image">Subir una Imagen:</label>

              <div class="col-md-8">
              <input type="file" name="image" value="" id="image">
              </div>
            </div>
          </div>
          <div class="form-group">
            <img src="<?php echo isset($result->ROOMIMAGE) && !empty($result->ROOMIMAGE) && is_file($result->ROOMIMAGE) ? $result->ROOMIMAGE : '' ?>" alt="Room Image" class="img-thumbnail col-md-5 col-md-offset-3" style=>
          </div>
	<div class="card-footer">
		      <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="idno"></label>
              

              <div class="col-md-8">
                <button class="btn btn-primary" name="save" type="submit" >Guardar</button>
              </div> 
              </div>
            </div>
          </div>

			
	
	
</form>


</div><!--End of container-->
</div>			
</div>