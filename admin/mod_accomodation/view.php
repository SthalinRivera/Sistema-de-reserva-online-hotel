<div class="container">
<div class="wrapper">
 
<?php

$_SESSION['id']=$_GET['id'];
$rm = new Accomodation();
$result = $rm->single_accomodation($_SESSION['id']);

?>
<caption><h3 >Detalles de alojamiento</h3></caption>
<div class="panel panel-primary">
	<div class="panel-body">
		<table class="table table-hover">
			

		<td width="30"><strong>Nombre </strong></td>
		<td><?php echo ': '.$result->ACCOMODATION; ?></td>
		</tr>
		<tr>
		<td width="30"><strong>Descripción </strong></td>
		<td><?php echo ': '.$result->ACCOMDESC; ?></td>
		</tr>
		<tr>
		<td> <input type="button" value="&laquo Regresar" class="btn btn-primary" onclick="window.location.href='index.php'" ></td>
		</tr>
		</table>
	
	 </div><!--End of Panel Body-->
 </div><!--End of Main Panel-->  
<?php unset($_SESSION['id']) ?>


</div>
</div>