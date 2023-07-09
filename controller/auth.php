<?php 

//require_once 'model/category.php';

class authController{
	public $page_title;
	public $view;

	public function __construct() {
		$this->view = 'login';
		$this->page_title = '';
		//$this->categoryObj = new Category();
	}

	public function login(){
		$this->page_title = 'Iniciar Sesión';
		//return $this->categoryObj->getCategories();
	}

}

?>