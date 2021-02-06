
<?php
include 'links.php'; 
require_once("../includes/initialize.php");
 if (!isset($_SESSION['ADMIN_ID'])){
 	redirect('login.php');
 	return true;
 }
 $title ="Dashboard";
 
$content='home.php';
include 'home.php'; 


include 'modal.php'; 
include 'themes/backendTemplate.php';
include 'dashboard.php'; 

?>
