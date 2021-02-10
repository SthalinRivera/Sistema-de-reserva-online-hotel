<?php 
require_once("../../includes/initialize.php");
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	doInsert();
	break;
	
	case 'edit' :
	doEdit();
	break;
	
	case 'delete' :
	doDelete();
	break;


	}
function doInsert(){
		
	if ($_POST['G_FNAME'] == "" ) {
		$messageStats = false;
			message("Todos los campos requeridossdasdsdas!", "error");
			redirect("index.php");
		
	}else{

		$guest = new Guest();
		$acc_name		= $_POST['G_EMAIL']; 
		$res = $guest->find_all_guest($acc_name);
		
		
		if ($res >=1) {
			message("El nombre de la cuenta ya existe!", "error");
			redirect("index.php?view=add");
		}else{
			
			
			$guest = new Guest();
			
			$guest->G_FNAME= $_POST['G_FNAME'];
			$guest->G_LNAME= $_POST['G_LNAME'];
			$guest->G_ADDRESS= $_POST['G_ADDRESS'];
			$guest->DBIRTH= $_POST['DBIRTH'];
			$guest->G_PHONE= $_POST['G_PHONE'];
			$guest->G_NATIONALITY= $_POST['G_NATIONALITY'];
			$guest->G_EMAIL= $_POST['G_EMAIL'];
			$guest->G_UNAME= $_POST['G_UNAME'];
			
			$istrue = $guest->create(); 

			 if ($istrue == 1){
			 	message("Nuevo[".$_POST['G_FNAME']."] creado con éxito ya existe!", "success");
			 	redirect('index.php');
			 	
			 }
		}	 

		
	}	
}
function doEdit(){
	if ($_POST['G_FNAME'] == "" OR $_POST['G_EMAIL'] == "" ) {
		$messageStats = false;
			message("Todos los campos requeridos!", "error");
			redirect("index.php?view=edit&id=".$_SESSION['id']);
		
	}else{
		$guest = new Guest();
		
			$guest->G_FNAME= $_POST['G_FNAME'];
			$guest->G_LNAME= $_POST['G_LNAME'];
			$guest->G_PHONE= $_POST['G_PHONE'];
			$guest->G_EMAIL= $_POST['G_EMAIL'];
			$guest->G_UNAME= $_POST['G_UNAME'];
			
			
			 	message("[".  $_POST['G_FNAME'] ."] Actualizado con éxito!", "success");
			 	unset($_SESSION['id']);
			 	redirect('index.php');
			

		
	}	
		
}

function doDelete(){
	 @$id=$_POST['selector'];
		  $key = count($id);
		//multi delete using checkbox as a selector
		
	for($i=0;$i<$key;$i++){
	 
		$guest = new Guest();
		$guest->delete($id[$i]);
	}

		message("Usuario ya eliminado!","info");
		redirect('index.php');

}