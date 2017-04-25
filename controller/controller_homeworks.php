<?
class controller_homeworks {
	
	public $model;
	public $view;
	
	function __construct(){
		$this->model = new model_homeworks_task;
		$this->view = new view_homeworks_task;
	}
	function action_start(){
		$this->view->generate('view_homeworks.php');
	}
	function action_login(){
	}
	function action_logout(){
	}
}

