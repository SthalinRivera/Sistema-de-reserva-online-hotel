
<div class="container">
	<?php
		check_message();
		$dashboarTitle ="Lista de habitación";	
		?>

	
		<!-- <div class="panel panel-primary"> -->
			<div class="card card-primary">
			<div class="card-header">
                <h3 class="card-title">Lista de Habitaciones</h3>
              </div>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" style="font-size:12px" class="table table-striped table-hover table-responsive"  cellspacing="0">
					
				  <thead>
				  	<tr  >
				  	<th>No.</th>
				  		<th align="left"  width="100">
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		Imagen</th>
				  		<!-- <th>Room#</th> -->
				  		<th align="left"  width="200">Habitacion</th>	
				  		<!-- <th align="left" width="120">Description</th> -->
				  		<th align="left" width="120">Alojamiento</th> 
						<!--  <th align="left" width="120">Piso</th> -->
				  		<th align="left" width="90">Personas</th>
				  		<th align="left"  width="200">Precio</th>
				  		<!-- <th># of Rooms</th> -->
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT *,ACCOMODATION FROM tblroom r, tblaccomodation a WHERE r.ACCOMID = a.ACCOMID ORDER BY  ROOMID ASC ");
				
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
						echo '<td width="5%" align="center"></td>';
				  		echo '<td align="left"  width="120"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->ROOMID. '"/> 
				  				<img src="'. $result->ROOMIMAGE.'" width="60" height="40" title="'. $result->ROOM .'"/></td>';
				  		// echo '<td><a href="index.php?view=edit&id='.$result->ROOMID.'">' . ' '.$result->ROOMNUM.'</a></td>';
						echo '<td><a href="index.php?view=edit&id='.$result->ROOMID.'">'. $result->ROOM.' ('. $result->ROOMDESC.')</a></td>';
				  		// echo '<td>'. $result->ROOMDESC.'</td>';ACCOMDESC
						echo '<td>'. $result->ACCOMODATION.' ('. $result->ACCOMDESC.')</td>';
						//echo '<td>'. $result->ACCOMODATION.'</td>';
						//echo '<td>'. $result->ACCOMODATION.'</td>';
						
				  		echo '<td>'. $result->NUMPERSON.'</td>';
				  		
				  		echo '<td> S/. '. $result->PRICE.'</td>';
				  		// echo '<td>'.$result->ROOMNUM.' </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				 	
				</table>

				<div class="card-footer">
                 
				  <div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-primary">Agregar</a>
				  <button type="submit" class="btn btn-danger" name="delete"><span class="glyphicon glyphicon-trash"></span> Elimiar las seleccionadas</button>
				</div>
                </div>
				
				</form>
	  		</div><!--End of Panel Body-->
	  	<!-- </div> -->
	  	<!--End of Main Panel-->

</div><!--End of container-->

<div class="modal fade" id="myModal" tabindex="-1">

</div>