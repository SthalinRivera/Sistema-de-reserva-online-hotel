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

	case 'editimage' :
	editImg();
	break;
	case 'delete' :
	doDelete();
	break;


	}
function doInsert(){
	 
			
			if ($_POST['ROOM'] == "" OR $_POST['ROOMNUM'] == "" OR $_POST['PRICE'] == "") {
			 
					message("¡Todos los campos requeridos!", "error");
					redirect("index.php?view=add");
				
			}else{
				$booked = new Booked();

 

				$res = $booked->find_all_room($_POST['ROOM']);
				
				
				if ($res >=1) {
					message("El nombre de la habitación ya existet!", "error");
					redirect("index.php?view=add");
				}else{
				$location = '';
				if(isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])){
						$file=$_FILES['image']['tmp_name'];
						$image= $_FILES['image']['tmp_name'];
						$image_name= date('YmdHi').'_'.addslashes($_FILES['image']['name']);
						$image_size= getimagesize($_FILES['image']['tmp_name']);
						
						if ($image_size==FALSE) {
							message("Eso no es una imagen!");
							redirect("index.php?view=add");
					   }else{
						
							
							$location="rooms/".$image_name;
							move_uploaded_file($image,"rooms/".$image_name);
						}
				}
					 
				$booked->ROOMNUM 		=	$_POST['ROOMNUM'];
				$booked->ROOM 		=	$_POST['ROOM'];
				$booked->ACCOMID 		=	$_POST['ACCOMID'];
				$booked->ROOMDESC 	=	$_POST['ROOMDESC'];
				$booked->NUMPERSON 	=	$_POST['NUMPERSON'];
				$booked->PRICE 		=	$_POST['PRICE'];
 				$booked->ROOMIMAGE    = $location;
 				$booked->OROOMNUM 	=	$_POST['ROOMNUM'];
					
					 $istrue = $booked->create(); 
					 if ($istrue == 1){
					 	message("Nuevo [". $_POST['ROOM'] ."] creado con éxito!", "success");
					 	redirect('index.php');
					 	
					 }
				}	 

		 
	}
  }
// }
//function to modify rooms

 function doEdit(){


           		$booked = new Room();
           		$location = '';
				if(isset($_FILES['image']) && !empty($_FILES['image']['tmp_name'])){
					$file=$_FILES['image']['tmp_name'];
					$image= $_FILES['image']['tmp_name'];
					$image_name= date('YmdHi').'_'.addslashes($_FILES['image']['name']);
					$image_size= getimagesize($_FILES['image']['tmp_name']);
					
					if ($image_size==FALSE) {
						message("Eso no es una imagen!");
						redirect("index.php?view=edit");
				   }else{
					
						
						$location="rooms/".$image_name;
						$move = move_uploaded_file($image,"rooms/".$image_name);
					}
					}
				$booked->ROOMNUM 		=	$_POST['ROOMNUM'];
				$booked->ROOM 		=	$_POST['ROOM'];
				$booked->ACCOMID 		=	$_POST['ACCOMID'];
				$booked->ROOMDESC 	=	$_POST['ROOMDESC'];
				$booked->NUMPERSON 	=	$_POST['NUMPERSON'];
				$booked->PRICE 		=	$_POST['PRICE'];
				$booked->OROOMNUM 	=	$_POST['ROOMNUM'];
				if(!empty($location))
 				$booked->ROOMIMAGE    = $location;
				
				$booked->update($_POST['ROOMID']); 
				
			 	message($_POST['ROOM'] ." Actualizado con éxito!", "success");
			 	unset($_SESSION['id']);
			 	redirect('index.php');
				 
}

function doDelete(){
@$id=$_POST['selector'];
		  $key = count($id);
		//multi delete using checkbox as a selector
		
	for($i=0;$i<$key;$i++){
	 
		$rm = new Room();
		$rm->delete($id[$i]);
	}

		message("¡Habitación ya eliminada!","info");
		redirect('index.php');
 }
 
 //function to modify picture
 
function editImg (){
		if (!isset($_FILES['image']['tmp_name'])) {
			message("Ninguna imagen seleccionada!", "error");
			redirect("index.php?view=list");
		}else{
			$file=$_FILES['image']['tmp_name'];
			$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name= addslashes($_FILES['image']['name']);
			$image_size= getimagesize($_FILES['image']['tmp_name']);
			
			if ($image_size==FALSE) {
				message("Eso no es una imagen!");
				redirect("index.php?view=list");
		   }else{
			
		
				$location="rooms/".$_FILES["image"]["name"];
				

	 				$rm = new Room();
	          		$rm_id		= $_POST['id'];
				
			    	move_uploaded_file($_FILES["image"]["tmp_name"],"rooms/".$_FILES["image"]["name"]);
					
					$rm->ROOMIMAGE = $location;
					$rm->update($rm_id); 
					
				 	message("Imagen de la habitación actualizada correctamente!", "success");
				 	unset($_SESSION['id']);
				 	 redirect("index.php");
 			}
 		}



 }			 





?>
