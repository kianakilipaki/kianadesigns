<?php 
/***********************************************
 * Main controller for Kiana Designs
 ***********************************************/


 // Get the value from the action name - value pair
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
  $action = filter_input(INPUT_GET, 'action');
}

// Switch statement to add views
switch ($action) {
    case 'template':
      include 'views/template.php';
      break;
  
    default:
      include 'views/home.php';
      break;
  }
?>