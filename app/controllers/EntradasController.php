<?php
require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../models/Entrada.php';
// Controlador para el módulo de empleados.
class EntradasController extends Controller {
    // Método por defecto. 
    public function index(): void {
        //Mientras que no inicio sesión - que le envie al login
        if(!isset($_SESSION['usuario'])){
            header("Location: " . BASE_URL ."/login"); 
            exit(); //por precausión
        } 

        //Instanciamos el objeto de la clase EMPLEADO;
        $modelo = new Entrada();
        $variable_empleados = $modelo->obtenerEmpleados();
        $this->view('entradas/entrada',[
            'usuario' => $_SESSION['usuario'],
            'empleados' =>$variable_empleados
        ]);
    }
}