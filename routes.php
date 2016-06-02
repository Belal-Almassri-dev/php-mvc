<?php
  function request($controller, $action) {
	  
	//Get the correct controller
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) { // there is a way of making this dynamic, but for this will do the job for this example.
      case 'pages':
	  	// Create new instance of the pageController
        $controller = new PagesController();
      break;
      case 'members':
        // This page requires a model.
        require_once('models/member.php');
        $controller = new membersController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error'],
                       'members' => ['index', 'show']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      request($controller, $action);
    } else {
      request('pages', 'error');
    }
  } else {
    request('pages', 'error');
  }
?>