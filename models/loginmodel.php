<?php 
 
 class LoginModel extends Model{
 	
 	public function __construct()
 	{
 		parent::__construct();
 	}
    
    public function validar($datos){

       try {
    		
$query=$this->db->connect()->prepare('SELECT * FROM `usuarios` WHERE dni=:dni AND numero_medidor=:medidor AND clave=:clave;');

		       $query->execute(['dni'=>$datos['dni'],'medidor'=>$datos['medidor'],'clave'=>$datos['clave']]);


                $rvc=$query->rowCount();
              
              if ($rvc==1) {
                 return true;	          
               }else{
                  return false;
               }

    	} catch (PDOException $e) {
    		// echo "ya existe la matricula";
    		return false;
    	}	
    $this->view->mensaje=$mensaje;

    }

 }
?>