<div class="container">
	<?php
		check_message();
			
		?>
		<!-- <div class="panel panel-primary"> -->
		<div class="card card-primary">
			<div class="card-header">
                <h3 class="card-title">Lista de Usuarios</h3>
              </div>
			    <form action="controller.php?action=delete" Method="POST">  					
					<table id="example" class="table table-striped" cellspacing="0">
					
				  <thead>
				  	<tr >
				  		<th>No.</th>
				  		<th>
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Nombre de la cuenta</th>
				  		<th>Usuario</th>
				  		<th>Tipo</th>
						<th>Nº de Contacto</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT * FROM `tbluseraccount`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
						echo '<td width="5%" align="center"></td>';
				  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->USERID. '"/>
				  				<a  href="index.php?view=edit&id='.$result->USERID.'">  <span class="glyphicon glyphicon-pencil">
				  				<a href="index.php?view=edit&id='.$result->USERID.'">' . ' '.$result->UNAME.'</a></td>';
				  		echo '<td>'. $result->USER_NAME.'</td>';
				  		echo '<td>'. $result->ROLE.'</td>';
				  		echo '<td>'. $result->PHONE.'</td>';
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

