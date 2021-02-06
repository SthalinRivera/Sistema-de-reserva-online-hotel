<?php
require_once("../../includes/initialize.php");
 if (!isset($_SESSION['ADMIN_ID'])){
 	redirect(WEB_ROOT ."admin/login.php");
 }
$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$title ="Huespéd";
switch ($view) {

  case '1' :
        $title="Home";  
        $content='home.php';    
    break;
  case '2' :
      $title="Gallery"; 
    $content ='gallery.php';
    break;
  case '3' :
      $title="About Us";  
    $content = 'about.php';   
    break;

  case 'contact' :
      $title="Contacts";  
    $content ='contact.php';    
    break;

 case 'booking' :
      $title="Book A Room";  
    $content ='bookAroom.php';    
    break;
        
     case 'accomodation' :
      $title="Accomodation";  
      $content='accomodation.php';
    break;  

  case 'largeview' :
      // $title="View";  
    $content ='largeimg.php';
    break;
  default :
      $title="Profile";  
    $content ='inbox.php';   
}
include '../modal.php';
require_once '../themes/backendTemplate.php';

?>
 