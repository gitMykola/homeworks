<?
Class Route
{
	static function start(){
		
		session_start();
		
		$controller_name = 'homeworks';
		$action_name = 'start';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		if(!empty($routes[1])) $controller_name = $routes[1];
		if(!empty($routes[2])) $action_name = $routes[2];
		
		$view_file = 'view_'.$controller_name.'.php';
		$view_path = "views/".$view_file;
		if(file_exists($view_path)){include $view_path;}
		
		$model_name = 'model_'.$controller_name;
		$controller_name = 'controller_'.$controller_name;
		$action_name = 'action_'.$action_name;
		
		$model_file = $model_name.'.php';
		$model_path = "models/".$model_file;
		if(file_exists($model_path)){include $model_path;}
		
		$controller_file = $controller_name.'.php';
		$controller_path = "controllers/".$controller_file;
		if(file_exists($controller_path)){include $controller_path;}
		else{Route::Error404();}
		
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action)){$controller->$action($args,$image);}
		else{Route::Error404();}
	}
	function Error404(){
		$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
	}
}

