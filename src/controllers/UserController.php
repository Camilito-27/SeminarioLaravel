<?php
require_once __DIR__ . '/../models/UserModel.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    // Acción para listar usuarios
    public function index() {
        $users = $this->model->getAll();
   
        require_once __DIR__ . '/../views/users/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $this->model->create($nombre, $email);
   
            header('Location: index.php?action=index');
            exit;
        } else {
  
            require_once __DIR__ . '/../views/users/create.php';
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $this->model->delete($_GET['id']);
            header('Location: index.php?action=index');
            exit;
        }
    }
  
public function edit() {
    if (isset($_GET['id'])) {
        $usuario = $this->model->getById($_GET['id']);
    
        var_dump($usuario);
    } else {
        echo "No se proporcionó un ID válido.";
    }
}

}
?>
