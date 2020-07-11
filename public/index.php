<?php
	include('../app/Lib/View.php');
	include('../app/Lib/Route.php');
	include('../app/Controllers/Home.php');

	// Add base route (startpage)
	Route::add('/', 'Home::MainPage');
	Route::add('/toto', 'Home::MainPage');



	Route::run('/');
?>
