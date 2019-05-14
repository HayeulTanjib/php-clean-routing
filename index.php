<?php 

require 'router.php';


$path = trim($_SERVER['REQUEST_URI'], '/');

$path = parse_url($path, PHP_URL_PATH);

//routing-oop way

Router::getRouter('oop' , 'views/home.php');
Router::getRouter('oop/about' , 'views/about.php');
Router::getRouter('oop/contact' , 'views/contact.php');

require Router::runRouter($path);







//basic routing-part2
// $routes = [
// 'practice' => 'all/home.php',
// 'practice/about' => 'all/about.php',
// 'practice/contact' => 'all/contact.php'
// ];

// if (array_key_exists($path, $routes)) {
	
// 	require $routes[$path];
// }
// else{
// 	require 'all/notfound.php';
// }





//basic routing-part1
// if ($path === '/practice') {
	
// 	require 'all/home.php';
// }
// elseif ($path === '/practice/contact') {
	
// 	require 'all/contact.php';
// }
// elseif ($path === '/practice/about') {
	
// 	require 'all/about.php';
// }
// else{
// 	require 'all/notfound.php';
// }


