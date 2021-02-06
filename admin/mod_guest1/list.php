<div class="container">
	<?php
		check_message();
			
		?>
		<!-- <div class="panel panel-primary"> -->
		<div class="card card-primary">
			<div class="card-header">
                <h3 class="card-title">Lista de Huspedes</h3>
              </div>
			    <form action="controller.php?action=delete" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
					
				  <thead>
				  	<tr >
				  		<th>No.</th>
				  		<th><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Nombre</th>
						<th>Apellidos</th>
						<th>Direccion</th>
						<th>F.Nacimiento</th>
						<th>Celular</th>
						<th>Email</th>
						<th>Accion</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT * FROM `tblguest`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
							echo '<td width="5%" align="center">'.$result->GUESTID.'</td>';
							echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->GUESTID. '"/>'.' '.$result->G_FNAME.'</td>';
							echo '<td>'.$result->G_LNAME.'</td>';	
							echo '<td>'. $result->G_ADDRESS.'</td>';
							echo '<td>'. $result->DBIRTH.'</td>';
							echo '<td>'. $result->	G_PHONE.'</td>';
							echo '<td>'. $result->G_EMAIL.'</td>';
							echo '<td> <a  href="index.php?view=edit&id='.$result->GUESTID.'"> <i class="fas fa-edit"></i> </td>';	 
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				
				</table>
				<div class="card-footer">
   
				<div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-primary">Nuevo</a>
				  <button type="submit" class="btn btn-danger" name="delete"><span class="glyphicon glyphicon-trash"></span>Eliminar los seleccionados</button>
				</div>
				</form>
	  		</div>
			   </div><!--End of Panel Body-->
	  	<!-- </div> -->
	  	<!--End of Main Panel-->

</div><!--End of container-->

