<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Categoria.php';
// Controlador para el módulo de empleados.
class CategoriasController extends Controller {
    // Método por defecto. 
    public function index(): void {
        //Mientras que no inicio sesión - que le envie al login
        if(!isset($_SESSION['usuario'])){
            header("Location: " . BASE_URL ."/login"); 
            exit(); //por precausión
        } 

        //Instanciamos el objeto de la clase EMPLEADO;
        $modelo = new Categoria();
        $variable_empleados = $modelo->obtenerEmpleados();
        $this->view('categorias/categoria',[
            'usuario' => $_SESSION['usuario'],
            'empleados' =>$variable_empleados
        ]);
    }
}