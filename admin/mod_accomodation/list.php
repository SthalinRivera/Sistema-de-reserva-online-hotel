<div class="container">
	<?php
		check_message();
			
		?>
		<!-- <div class="panel panel-primary"> -->
		<div class="card card-primary">
			<div class="card-header">
                <h3 class="card-title">Lista de alojamiento</h3>
              </div>

			    <form action="controller.php?action=delete" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
					
				  <thead>
				  	<tr >
				  		<th>No.</th>
				  		<th>  
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  
						   Alojamiento</th>
				  		<th>Descripción</th>
						  <th>Accion</th> 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$accom = new Accomodation();
				  		$cur = $accom->listOfaccomodation();
				  		
						foreach ($cur as $result) {
				  		echo '<tr>';
						echo '<td width="5%" align="center"></td>';
				  		echo '<td width="20%" align="left"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->ACCOMID. '"/>
				  				<a href="index.php?view=view&id='.$result->ACCOMID.'">' . ' '.$result->ACCOMODATION.'</a></td>';
						  echo '<td>'. $result->ACCOMDESC.'</td>';
						  echo '<td><a  href="index.php?view=edit&id='.$result->ACCOMID.'"> <i class="fas fa-edit"></i> </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				
				</table>
				<div class="card-footer">
				<div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-primary">Agregar</a>
				  <button type="submit" class="btn btn-danger" name="delete"><span class="glyphicon glyphicon-trash"></span> Eliminar seleccionada</button>
				</div> 
				</div>
				</form>
	  		</div><!--End of Panel Body-->
	  	<!-- </div> -->
	  	<!--End of Main Panel-->

</div><!--End of container-->

