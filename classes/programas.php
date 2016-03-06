<?php
/*
* Modulo: Programa
* Version: 0.1A
* Dependencias:
* --Database.
* --Imagen.
* 
* Manejador de Programas de radio.
*/
class Programa extends Database {
	private $id, $titulo, $locutor, $hora1,$hora2,$descripcion,$img;
	private $table;
	private $datos = array();
	public function __construct() {
		$this->table = "programas";
		if(parent::Create($this->table,
		"id INT UNSIGNED AUTO_INCREMENT,titulo VARCHAR(128),locutor VARCHAR(128),hora1 TIME,hora2 TIME,descripcion TEXT,img INT,PRIMARY KEY(id)")){
			return true;
		}
		else{
			return false;
		}
	}
	public function getTable(){
		return $this->table;
	}
	public function getAll(){
		return parent::SelectAll("*",$this->table);
	}
	public function setId($id){
		$this->id = $id;
		$this->datos = parent::Select("*",$this->table,"id",$id);
		$this->titulo = $this->datos[1];
		$this->locutor = $this->datos[2];
		$this->hora1 = $this->datos[3];
		$this->hora2 = $this->datos[4];
		$this->descripcion = $this->datos[5];
		$this->img = $this->datos[6];
	}
	public function getId(){
		if($this->id != null){
			return $this->id;
		}
		else{
			return false;
		}
	}
	public function getTitulo(){
		if($this->titulo != null){
			return ($this->titulo);
		}
		else{
			return false;
		}
	}
	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	public function getLocutor(){
		if($this->locutor != null){
			return ($this->locutor);
		}
		else{
			return false;
		}
	}
	public function setLocutor($locutor){
		$this->locutor = $locutor;
	}
	public function getHora1(){
		if($this->hora1 != null){
			return $this->hora1;
		}
		else{
			return false;
		}
	}
	public function setHora1($hora1){
		$this->hora1 = $hora1;
	}	
	public function getHora2(){
		if($this->hora2 != null){
			return $this->hora2;
		}
		else{
			return false;
		}
	}
	public function setHora2($hora2){
		$this->hora2 = $hora2;
	}
	public function getDescripcion(){
		if($this->descripcion != null){
			return ($this->descripcion);
		}
		else{
			return false;
		}
	}
	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	public function getImagen(){
		if($this->img != null){
			return $this->img;
		}
		else{
			return false;
		}
	}
	public function setImagen($img){
		$this->img = $img;
	}
	public function Save(){
		return parent::Insert($this->table,array("titulo" => $this->titulo,"locutor" => $this->locutor,"hora1" => $this->hora1,"hora2" => $this->hora2,"descripcion" => $this->descripcion,"img" => $this->img));
	}
	public function Update(){
		if($this->id != null){
			return parent::Update($this->table,array("titulo" =>$this->titulo,"locutor" =>$this->locutor,"hora1" =>$this->hora1,"hora2" =>$this->hora2,"descripcion" =>$this->descripcion,"img" =>$this->img),"id",$this->id);
		}	
		else{
			return false;
		}
	}
	public function Delete(){
		if($this->id != null){
			return parent::Delete($this->table,"id",$this->id);
		} 
		else {
			return flase;
		}
	}
}
?>