<?php

include_once('config.php');

class BaseMysql {
    
     private $cnx = '';
    function __construct() 
    {
     
    }
   

    private function conectar() {
       $this->cnx= new PDO('mysql:host='.HOST.';dbname='.BASE.';port='.PORT,USER,PASS);
		$this->cnx->query('set names utf8');
    }

    private function desconectar() {
        $this->cnx = null;       
    }

    function consultar($sql = '', $p = '',$c='') 
    {
        # SELECT
       
        
        $this->conectar();
		$tempo=$this->cnx->prepare($sql);
		if ($p!='') {
			foreach ($p as $key => $value) {
                            
				$tempo->bindParam(($key+1),$value);
			}
		}
		$tempo->execute();
		if ($p!='' && $c=='') {
			$datos=$tempo->fetch(PDO::FETCH_OBJ);
		}else if($p!='' && $c!='')
                {
                    $datos=$tempo->fetchAll(PDO::FETCH_ASSOC);
                }else
                {
			$datos=$tempo->fetchAll(PDO::FETCH_ASSOC);			
		}
		$this->desconectar();
		return $datos;	
        /*
        $this->conectar();

            $tempo=$this->cnx->prepare($sql);

            if($datos!='')
            {
                foreach ($datos as $id => $info) 
                {
			$tempo->bindParam(($id+1),$info);
		}
                
               
            }
            $tempo->execute();
              if($datos!='')
            {
               $info=$tempo->fetch(PDO::FETCH_ASSOC);
            }
            else
            {
                $info=$tempo->fetchAll(PDO::FETCH_ASSOC);
            }
                
                

        
            $this->desconectar();

        return $info;
        */
    }

    function ejecutar($sql = '', $datos = '')
    {
        #insert, update, delete
  
        $this->conectar();
       
		$tempo=$this->cnx->prepare($sql);
		foreach ($datos as $id => &$info) {
			$tempo->bindParam(($id+1),$info);
		}
		$exito=$tempo->execute();
		$this->desconectar();
		if($exito){
			return 1;
		}else{
			return 0;
		}
        
    }

}
