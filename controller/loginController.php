<?php
//include("/modelo/Usuario.php");

class loginController{
    
    function __construct() {
        //$this->actividadModel = new ActividadModel();
        //$this->parametroModel= new ParametroModel();
    }
    //accion por defecto
    public function consultar(){
        //llamar al modelo
        //$this->actividades=$this->actividadModel->Listar();
        //llamar a la vista
        require_once 'view/header.php';
        require_once 'view/actividades/loginView.php';
        require_once 'view/footer.php';
    }
    
}
    


