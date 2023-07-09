<?php 

require_once 'model/user.php';

class authController{
	public $page_title;
	public $view;

	public function __construct() {
		$this->view = 'login';
		$this->page_title = '';
		$this->userObj = new User();
		session_start(); // Iniciar la sesión aquí
	}

	public function login(){
		$this->page_title = 'Iniciar Sesión';
		//return $this->categoryObj->getCategories();
	}

	public function save() {
		$userData = json_decode(file_get_contents("php://input"), true);
		$id = $this->userObj->save($userData);
		$_SESSION['id'] = $id;
		$_SESSION['name'] = $userData['name'];
        $_SESSION['email'] = $userData['email'];
        $_SESSION['provider'] = $userData['provider'];
		return $id;
	}

	public function logout(){
		$this->page_title = 'Cerrar Sesión';
		session_start();

		// Limpiar y destruir las variables de sesión
		session_unset();
		session_destroy();

		header("Location: index.php?controller=auth&action=login");
		exit();
	}
}

?>