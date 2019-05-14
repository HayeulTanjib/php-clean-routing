<?php 

//routing-oop way

class Router{

	public static $routes;

	public static function getRouter($url , $view){
     self::$routes[$url] = $view;
	}

	public static function runRouter($url){

		if (array_key_exists($url, self::$routes)) {
			
			return self::$routes[$url];
		}
		else{

			return 'views/notfound.php';
		}
    

	}
}

