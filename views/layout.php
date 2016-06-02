<!doctype html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <title>MVC PHP</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="styles/foundation.css">
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>

<header>
    <nav class="row">
    	<ul>
        	<li><a href='/mvc-php'>Home</a></li>
        	<li><a href='?controller=members&action=index'>members</a></li>
        </ul>
    </nav>
</header>
<section class="cont">
	<div class="row">
		<?php require_once('routes.php'); ?>
    </div>
</section>

<footer>
	<div class="row">
        Copyright should be added here!!!
    </div>
</footer>
<body>
<html>