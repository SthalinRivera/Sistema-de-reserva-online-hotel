<div class="container">
    <form class="form-horizontal well span6" action="controller.php?action=add" enctype="multipart/form-data"
        method="POST">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Agregar Habitaciones</h3>
            </div>



            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="ROOM">Nombre:</label>

                    <div class="col-md-8">
                        <input name="" type="hidden" value="">
                        <input class="form-control input-sm" id="ROOM" name="ROOM" placeholder="Nombre de habitacion"
                            type="text" value="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="ACCOMID">Alojamiento:</label>

                    <div class="col-md-8">
                        <select class="form-control input-sm" name="ACCOMID" id="ACCOMID">
                            <option value="None">Ninguno</option>
                            <?php
                    $rm = new Accomodation();
                    $cur= $rm->listOfaccomodation();
                    foreach ($cur  as $accom) {
                      echo '<option value='.$accom->ACCOMID.'>'.$accom->ACCOMODATION.' (' . $accom->ACCOMDESC.')</OPTION>';
                    }

                    ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="ROOMDESC">Descripcion:</label>

                    <div class="col-md-8">
                        <input name="" type="hidden" value="">
                        <input class="form-control input-sm" id="ROOMDESC" name="ROOMDESC" placeholder="Descripcion"
                            type="text" value="">
                    </div>
                </div>
            </div>





            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="NUMPERSON">Numero de persona:</label>

                    <div class="col-md-8">
                        <input class="form-control input-sm" id="NUMPERSON" name="NUMPERSON"
                            placeholder="Numero de persona" type="text" value="1"
                            onkeyup="javascript:checkNumber(this);">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="PRICE">Precio:</label>

                    <div class="col-md-8">
                        <input class="form-control input-sm" id="PRICE" name="PRICE" placeholder="Precio" type="text"
                            value="" onkeyup="javascript:checkNumber(this);">
                    </div>
                </div>
            </div>

            <!--  <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for=
              "ROOMNUM">No. of Rooms:</label>

              <div class="col-md-8">
                <input name="" type="hidden" value=""> -->
            <input class="form-control input-sm" id="ROOMNUM" name="ROOMNUM" placeholder="Room #" type="hidden"
                value="1">
            <!--    </div>
            </div>
          </div> -->

            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="image">Subir uma Imagen:</label>

                    <div class="col-md-8">
                        <input type="file" name="image" value="" id="image">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="idno"></label>

                    <div class="col-md-8">
                        <button class="btn btn-primary" name="save" type="submit">Gurdar</button>
                    </div>
                </div>
            </div>


        </div>


    </form>


</div>
<!--End of container-->