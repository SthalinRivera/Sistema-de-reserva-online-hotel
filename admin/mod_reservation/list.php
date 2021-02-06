<?php
		check_message();
			
		?>
<div class="container">
<!-- <div class="panel panel-primary"> -->
<div class="card card-primary">
			<div class="card-header">
                <h3 class="card-title">Lista de reservaciones</h3>
              </div>
<form  method="post" action="processreservation.php?action=delete">
	<table id="table" class="table table-striped" cellspacing="0">
<thead>
<tr>
<td width="5%">#</td>	

<td width="90"><strong>Huésped</strong></td>
<!--<td width="10"><strong>Confirmation</strong></td>-->
<td width="80"><strong>Fecha de Transacción</strong></td>
<td width="80"><strong>Codigo de Confimacion</strong></td>
<td width="70"><strong>Total Habitacion</strong></td>
<td width="80"><strong>Total Precio</strong></td>
<!-- <td width="80"><strong>Nights</strong></td> -->
<td width="80"><strong>Estado</strong></td>
<td width="100"><strong>Accion</strong></td>
</tr>
</thead>
<tbody>
<?php
 
$mydb->setQuery("SELECT  p.`GUESTID`,`G_FNAME` ,  `G_LNAME` ,  `G_ADDRESS` ,  `TRANSDATE` ,  `CONFIRMATIONCODE` ,  `PQTY` ,  `SPRICE` ,`STATUS`
				FROM  `tblpayment` p,  `tblguest` g
				WHERE p.`GUESTID` = g.`GUESTID`   
				ORDER BY p.`STATUS`='pending' desc ");
$cur = $mydb->loadResultList();
				  			 
foreach ($cur as $result) {
?>
<tr>
<td width="5%" align="center"></td>
<td><?php echo $result->G_FNAME." ".$result->G_LNAME; ?></td>
<td><?php echo $result->TRANSDATE; ?></td>  
<td><?php echo $result->CONFIRMATIONCODE; ?></td>
<td><?php echo $result->PQTY; ?></td>
<td>S/.<?php echo $result->SPRICE; ?></td>
<td><?php echo $result->STATUS; ?></td> 
 <td >
	<?php 
		if($result->STATUS == 'Confirmed'){ ?>
		<!-- <a class="cls_btn" id="<?php echo $result->reservation_id; ?>" data-toggle='modal' href="#profile" title="Click here to Change Image." ><i class="icon-edit">test</a> -->
			<a href="index.php?view=view&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-primary btn-xs" ><i class="fas fa-eye"></i></a>
			<a href="controller.php?action=cancel&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-primary btn-xs" ><i class="icon-edit">Cancelar</a>
			<a href="controller.php?action=checkin&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-success btn-xs" ><i class="icon-edit">Check in</a>
			<a href="controller.php?action=delete&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="fas fa-trash-alt"></i></a>
			<a href="index.php?view=edit&code=<?php echo $result->CONFIRMATIONCODE; ?>&id=<?php echo $result->GUESTID; ?>" class="btn btn-primary btn-xs"  ><i class="fas fa-edit"></i></a>
		<?php
		}elseif($result->STATUS == 'Checkedin'){
	?>
			<a href="index.php?view=view&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-primary btn-xs" ><i class="fas fa-eye"></i></a>
			<a href="controller.php?action=checkout&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs" ><i class="icon-edit">Check out</a>
			<a href="controller.php?action=delete&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="fas fa-trash-alt"></i></a>
			<a href="index.php?view=edit&code=<?php echo $result->CONFIRMATIONCODE; ?>&id=<?php echo $result->GUESTID; ?>" class="btn btn-primary btn-xs"  ><i class="fas fa-edit"></i></a>
	<?php
		}elseif($result->STATUS == 'Checkedout'){ ?>
			<a href="index.php?view=view&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-primary btn-xs" ><i class="fas fa-eye"></i></a>
			<a href="controller.php?action=delete&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="fas fa-trash-alt"></i></a>
			<a href="index.php?view=edit&code=<?php echo $result->CONFIRMATIONCODE; ?>&id=<?php echo $result->GUESTID; ?>" class="btn btn-primary btn-xs"  ><i class="fas fa-edit"></i></a>
			
	<?php }else{
			?>
			<a href="index.php?view=view&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-primary btn-xs" ><i class="fas fa-eye"></i></a>
			<a href="controller.php?action=cancel&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-primary btn-xs" ><i class="icon-edit">Cancelar</a>
			<a href="controller.php?action=confirm&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-success btn-xs"  ><i class="icon-edit">Confirmar</a>
			<a href="controller.php?action=delete&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="fas fa-trash-alt"></i></a>
			<a href="index.php?view=edit&code=<?php echo $result->CONFIRMATIONCODE; ?>&id=<?php echo $result->GUESTID; ?>" class="btn btn-primary btn-xs"  ><i class="fas fa-edit"></i></a>
	<?php
		}

	?>
	
	
</td>

<?php }
?>
		<div class="modal fade" id="profile" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						

						<div class="alert alert-info">Profile:</div>
					</div>

					<form action="#"  method=
					"post">
						<div class="modal-body">
					
												
								<div id="display">
									
										<p>ID : <div id="infoid"></div></p><br/>
											Name : <div id="infoname"></div><br/>
											Email Address : <div id="Email"></div><br/>
											Gender : <div id="Gender"></div><br/>
											Birthday : <div id="bday"></div>
										</p>
										
								</div>
						</div>

						<div class="modal-footer">
							<button class="btn btn-default" data-dismiss="modal" type=
							"button">Close</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

</table>

</form>
<!-- </div> -->
</div>