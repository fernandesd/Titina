<?php

namespace Core;

class Container
{
	public static  function newController($controller)
	{
		$controller = "App\\Controllers\\" . $controller;
		return new $controller;
	}

	public static function pageNotFound()
	{
		if(file_exists(__DIR__ . "/../app/Views/home/404.phtml")){
			return require_once __DIR__ . "/../app/Views/home/404.phtml";
		}else{
			echo "<h1>Erro 404: Page Not Found!</h1>";
		}
	}
}

?>