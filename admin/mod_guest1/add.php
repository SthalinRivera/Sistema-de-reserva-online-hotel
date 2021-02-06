<div class="container">
    <form class="form-horizontal well span6" action="controller.php?action=add" method="POST">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Agregar Usuario</h3>
            </div>


            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="UNAME">Nombres:</label>

                    <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input class="form-control input-sm" id="UNAME" name="UNAME" placeholder="Nombre de usuario"
                            type="text" value="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="G_LNAME">Apellidos:</label>
                    <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input class="form-control input-sm" id="G_LNAME" name="G_LNAME" placeholder="Usuario"
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
                        <input class="form-control input-sm" id="DBIRTH" name="DBIRTH" placeholder="Usuario" type="date"
                            value="">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="G_PHONE">Numero:</label>
                    <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input class="form-control input-sm" id="G_PHONE" name="G_PHONE" placeholder="+91 973 232 311"
                            type="text" value="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    <label class="col-md-4 control-label" for="G_EMAIL">Email:</label>
                    <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                        <input class="form-control input-sm" id="G_EMAIL" name="G_EMAIL"
                            placeholder="nombre@dominio.com" type="text" value="">
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