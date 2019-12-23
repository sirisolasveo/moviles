<?php
class Informacion extends Controller{
    function __construct(){
        parent::__construct();
        //echo "<p>Nuevo controlador Main</p>";
    }
    
    function render(){
        $this->view->render('informacion/index');        
    }

    function mostrar_datos_usuario(){
     
    }

    function saludo(){
        echo "<p>Ejecutaste el método Saludo</p>";
    }


}
?>