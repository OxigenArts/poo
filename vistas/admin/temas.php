
<?php
require_once 'classes/config.php';
require_once 'classes/temas.php';
require_once 'classes/imagenes.php';
$conf= new Config();
$tema = new Tema();

$mensaje = "";
if(isset($_POST['eliminar'])){
	if($_POST['id'] != $conf->getCfg("tema")){
		$tema->setId($_POST['id']);
		if($tema->Delete()){
			$mensaje = '<span class="success">Tema eliminado con exito!</span>';
		}
		else{
			$mensaje = '<span class="error">Ocurrio un error, intentelo de nuevo mas 	tarde.</span>';
		}
	}
	else{
		$mensaje = '<span class="neutro">Eres rebelde... Me agradas ;)</span>';
	}
}
else if(isset($_POST['activar'])){

	if($conf->setCfg(array("tema" => $_POST['id']))){
		$mensaje = '<span class="success">Tema activado con exito!</span>';
	}
	else{
		$mensaje = '<span class="error">Ocurrio un error, intentelo de nuevo mas tarde.</span>';
	}
}
?>
<h1>Temas</h1>
<p>Elige un tema para mostar en la pagina principal de tu sitio.</p>
<section id="lista">
<p><?php echo $mensaje; ?></p>
<?php
$alltemas = $tema->getAll();
foreach ($alltemas as $key => $value) {
	$urlimg = "vistas/temas/".$value['carpeta']."/foto.jpg";
	if(file_exists($urlimg)){
	$urlimg = $conf->getCfg("url")."vistas/temas/".$value['carpeta']."/foto.jpg";
	}
	else{
	$urlimg = $conf->getCfg("url")."vistas/temas/default.jpg";	
	}
	

	echo'<article class="mid">
		<h1>'.$value['titulo'].'</h1>
		<img src="'.$urlimg.'">
		<p>Autor: '.$value['autor'].'</p>
		<p>Descripcion: '.$value['descripcion'].'</p>
		<p>Fecha de Creación: '.$value['fecha'].'</p>';
		if($conf->getCfg("tema") == $value['id']){
			echo '<b>Tema activo</b>';
		}
		else{
			echo'<ul>
			<li>
				<form method="post">
					<input type="hidden" name="id" value="'.$value['id'].'">
					<input name="activar" class="azul" value="Activar" type="submit">
				</form>
			</li>
			<li>
				<form method="post">
					<input type="hidden" name="id" value="'.$value['id'].'">
					<input name="eliminar" class="rojo" value="Eliminar" type="submit">
				</form>
			</li>
		</ul>';
		}
	echo '</article>';
}
?>
</section>