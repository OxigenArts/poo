<?php
/*
* Modulo: Playlist
* Version: 0.1A
* Dependencias:
* --Database.
* --Imagen.
* --Audio.
* 
* Manejador de Musica en Playlist.
*/
class Playlist extends Database {
	private $id, $titulo, $img, $audio;
	private $table;
	private $datos = array();
	public function __construct() {
		$this->table = "playlist";
		if(parent::Create($this->table,
		"id INT UNSIGNED AUTO_INCREMENT,titulo VARCHAR(256),img INT,audio INT,PRIMARY KEY(id)")){
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
		$this->img = $this->datos[2];
		$this->audio = $this->datos[3];
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
	public function getAudio(){
		if($this->audio != null){
			return $this->audio;
		}
		else{
			return false;
		}
	}
	public function setAudio($audio){
		$this->audio = $audio;
	}	
	public function Save(){
		return parent::Insert($this->table,array("titulo" => $this->titulo, "img" => $this->img, "audio" => $this->audio));
	}
	public function Update(){
		if($this->id != null){
			return parent::Update($this->table,array("titulo" =>$this->titulo,"img" =>$this->img,"audio" =>$this->audio),"id",$this->id);
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