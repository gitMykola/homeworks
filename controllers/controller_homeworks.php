<?
class controller_homeworks {
	
	public $model;
	public $view;
	
	function __construct(){
		//$this->model = new model_homeworks;
		$this->view = new view_homeworks;
	}
	function action_start(){
		$this->view->generate('template_homeworks.php');
	}
	function action_login(){
	}
	function action_logout(){
	}
}

