<?php

$_SESSION['id']=$_GET['id'];
$booked = new Booked();
$result = $booked->single_room($_SESSION['id']); 

$guest = new Guest();
$result_guest = $guest->single_guest($_SESSION['id']); 

$reservation = new Reservation();
$result_reservation = $reservation->single_reservation($_SESSION['id']); 

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="app.js"></script>
<div class="container">

    <div class="row">
        <div class="col-sm-6">
            <!--   -->
            <form class="form-horizontal well span6" action="register.php" enctype="multipart/form-data"
                method="POST">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Reservar ahora</h3>
                    </div>
                   
                    <div class="form-group">
                        <div class="col-md-8">
                            <label class="col-md-12 control-label" for="ROOMID">ROOMID:</label>
                            <div class="col-md-12">
                                <input name="" type="hidden" value="">
                                <input  class="form-control input-sm" id="ROOMID" name="ROOMID"
                                    placeholder="ROOMID" type="text" value="<?php echo $result->ROOMID; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <label class="col-md-12 control-label" for="ARRIVAL">ARRIVAL:</label>
                            <div class="col-md-12">
                                <input name="" type="hidden" value="">
                                <input type="date" class="form-control input-sm" id="ARRIVAL" name="ARRIVAL"
                                    placeholder="Desde" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <label class="col-md-12 control-label" for="DEPARTURE">DEPARTURE:</label>
                            <div class="col-md-12">
                                <input name="" type="hidden" value="">
                                <input type="date" class="form-control input-sm" id="DEPARTURE" name="DEPARTURE"
                                    placeholder="Hasta" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <label class="col-md-4 control-label" for="RPRICE">Precio:</label>
                            <div class="col-md-12">
                                <input class="form-control input-sm" id="RPRICE" name="RPRICE" placeholder="Precio"
                                    type="text" value="<?php echo $result->PRICE; ?>"
                                    onkeyup="javascript:checkNumber(this);">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <label class="col-md-4 control-label" for="GUESTID">GUESTID:</label>
                            <div class="col-md-12">
                                <input name="busqueda" id="GUESTID" type="hidden" value="">
                                <input class="form-control input-sm" id="GUESTID" name="GUESTID"
                                    placeholder="GUESTID" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <label class="col-md-4 control-label" for="PRORPOSE">PRORPOSE:</label>
                            <div class="col-md-12">
                                <input name="busqueda" id="busqueda" type="hidden" value="">
                                <input class="form-control input-sm" id="PRORPOSE" name="PRORPOSE"
                                    placeholder="PRORPOSE " type="text" value="">
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




        <div class="col-sm-6">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lista de Huspedes</h3>
                </div>
                <form action="buscar.php" method="$_GET">

                    <section>
                        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar...">
                    </section>

                    <section id="tabla_resultado">
                        <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
                    </section>

                </form>
            </div>
        </div>
    </div>