<?php 
 
 class NuevoModel extends Model{
 	
 	public function __construct()
 	{
 		parent::__construct();
 	}
    
    public function insert($datos){

       try {
    		
		 $query=$this->db->connect()->prepare('INSERT INTO alumnos(matricula,nombre,apellido) VALUES(:matricula,:nombre,:apellido)');
		       $query->execute(['matricula'=>$datos['matricula'],'nombre'=>$datos['nombre'],'apellido'=>$datos['apellido']]);

           return true;		    

    	} catch (PDOException $e) {
    		// echo "ya existe la matricula";
    		return false;
    	}	
    $this->view->mensaje=$mensaje;

    }

 }
?>