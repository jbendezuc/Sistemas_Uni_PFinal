<?php
class BaseDatos{
	private $base='';
	private $tempo='';
	function __construct() {
	}
	
	private function conectar(){
		$this->base= new PDO('mysql:host='.HOST.';dbname='.BASE.';port='.PORT,USER,PASS);
		$this->base->query('set names utf8');
	}
	
	private function desconectar(){
		$this->base=null;
		$this->tempo=null;
	}
	
	function consultar($sql='',$p='',$t=''){
	
		$this->conectar();
		$this->tempo=$this->base->prepare($sql);
		if ($p!='') {
			foreach ($p as $key => $value) {
				$this->tempo->bindParam(($key+1),$value);
			}
		}
		$this->tempo->execute();
		if ($p!='') {
			$datos=$this->tempo->fetch(PDO::FETCH_ASSOC);
		}else{
			$datos=$this->tempo->fetchAll(PDO::FETCH_ASSOC);			
		}
		if ($t=='count') {
			$datos=$this->tempo->rowCount();
		}
		$this->desconectar();
		return $datos;	
	}
	
	function ejecutar($sql='',$p){
	
		$this->conectar();
		$this->tempo=$this->base->prepare($sql);
		foreach ($p as $f => &$value) {
			$this->tempo->bindParam(($f+1),$value);
		}
		$exito=$this->tempo->execute();
		$this->desconectar();
		if($exito){
			return 1;
		}else{
			return 0;
		}		
	}
}
?>