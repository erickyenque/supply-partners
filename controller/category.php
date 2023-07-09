<?php 

require_once 'model/category.php';
require_once 'model/supply.php';

class categoryController{
	public $page_title;
	public $view;

	public function __construct() {
		$this->view = 'home';
		$this->page_title = '';
		$this->categoryObj = new Category();
		$this->supplyObj = new Supply();
	}

	/* List all categories */
	public function list($id = null){
		$this->page_title = 'Listado de categorías';
		$categories = $this->categoryObj->getCategories();
		$supplies = [];
		if(isset($_GET["id"])) {
			$id = $_GET["id"];
		} else {
			$id = $categories[0]['id'];
		}
		
		$supplies = $this->supplyObj->getSupplyByCategoryId($id);
		return array( "categories" => $categories, "supplies" => $supplies);
	}

}

?>