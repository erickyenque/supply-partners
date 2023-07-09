<?php 

require_once 'model/category.php';

class categoryController{
	public $page_title;
	public $view;

	public function __construct() {
		$this->view = 'home';
		$this->page_title = '';
		$this->categoryObj = new Category();
	}

	/* List all categories */
	public function list(){
		$this->page_title = 'Listado de categorías';
		return $this->categoryObj->getCategories();
	}

}

?>