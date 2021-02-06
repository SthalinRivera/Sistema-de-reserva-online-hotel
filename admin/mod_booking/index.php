<?php
require_once("../../includes/initialize.php");
 if (!isset($_SESSION['ADMIN_ID'])){
 	redirect(WEB_ROOT ."admin/login.php");
 }
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$title ="Usuario";
switch ($view) {
	case 'booking' :
	    $title="Booking";
		$content    = 'booking.php';		
		break;

	case 'logininfo' :
	    $title="Booking";
		$content    = 'logininfo.php';		
		break; 

	case 'payment':
	    $title="Booking";
   		$content    = 'payment.php';		
		break;

	case 'detail' :
	    $title="Booking";
		$content    = 'reservation.php';
		break;
	case 'mpesa' :
	    $title="Booking";
		$content    = 'detail.php';
		break;
	case 'personalinfo' :
		$title="personalinfo";
		$content    = 'personalinfo.php';
		break;
	case 'search' :
		$title="search";
		$content    = 'search.php';	
		break;
	case 'ps' :
      $title="p";  
	  $content='accomodation.php';
	  break;
	default :
	    $title="Booking";
		$content    = 'booking.php';		
}
include '../modal.php';
require_once '../themes/backendTemplate.php';
?> 