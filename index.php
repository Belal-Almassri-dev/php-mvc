<?php
  require_once('connection.php');

  if (isset($_GET['controller']) && isset($_GET['action'])) {
	  // get the correct controller and action
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
	//Home page is the default page, please chenge if required.
    $controller = 'pages';
    $action     = 'home';
  }

  require_once('views/layout.php');
?>