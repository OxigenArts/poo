<?php
require_once 'classes/imagenes.php';
require_once 'classes/usuarios.php';
require_once 'classes/posts.php';
$mensaje = "";
if(isset($_POST['eliminar'])){
	$imagen = new Imagen();
	$post = new Post();
	$post->setId($_POST['id']);
	$imagen->setId($post->getImagen());
	if($post->Delete()){
		if($imagen->Delete()){
			$mensaje = '<span class="success">Post eliminado con exito!</span>';
		}
		else{
			$mensaje = '<span class="neutro">El post se eliminó, pero ocurrio un problema al intentar eliminar la imagen.</span>';
		}
	}
	else{
		$mensaje = '<span class="error">Ocurrio un problema al eliminar el post.</span>';
	}
	mostrarPosts($mensaje);
}
else if(isset($_POST['editar'])){
	$post = new Post();
	$imagen = new Imagen();
	$post->setId($_POST['id']);
	$imagen->setId($post->getImagen());

	echo'<h1>Editar post</h1>
	<p>Rellene el formulario para editar la publicación.</p>
	<p>Los campos marcados con <span class="red">*</span> son obligatorios</p>
	<section id="lista">
	<article>
	<form action="" method="post" enctype="multipart/form-data">
	<h2><span class="red">*</span> Titulo:<h2>
	<input value="'.$post->getTitulo().'" required name="titulo" type="text">
	<h2><span class="red">*</span> Contenido de la publicacion:</h2>
	<textarea required name="contenido">'.$post->getContenido().'</textarea>
	<h2> Imagen destacada:</h2>
	<img class="imgcenter" src="'.$imagen->getUrl().'">
	<input name="imagen" type="file">
	<h2> Tags: (separados por comas)</h2>
	<input value="'.$post->getTags().'" name="tags" type="text">
	<input value="'.$post->getId().'" name="id" type="hidden">
	<input name="editsave" class="azul"  type="submit" value="Guardar">
	<?php echo $mensaje; ?>
	</form>
	</article>
	</section>
	';
}
else if(isset($_POST['editsave'])){
	
	if(empty($_POST['titulo']) || empty($_POST['contenido']) ){
		$mensaje = '<span class="error">Ocurrio un error, verifique los campos.</span>';
	}
	else{
		$imagen = new Imagen();
		$post = new Post();
		$post->setId($_POST['id']);
		$idimagen = $imagen->Subir($_FILES['imagen']);
		if($idimagen != false){
			$imagen->setId($post->getImagen());
			$imagen->Delete();
		}
		$post->setTitulo($_REQUEST['titulo']);
		$post->setContenido($_REQUEST['contenido']);
		$post->setTags($_REQUEST['tags']);
		$post->setImagen($idimagen[0]);
		if($post->Update()){
			$mensaje = '<span class="success">Post guardado correctamente!</span>';
		}	
		else{
			$mensaje = '<span class="error">Ocurrio un error, intenta nuevamente. si el problema persiste contacte a un administrador.</span>';
		}	
	}
	mostrarPosts($mensaje);
}
else{
	mostrarPosts($mensaje);
}

function mostrarPosts($mensaje){
	echo '<h1>Publicaciones</h1>
	<p>Aqui puede encontrar una lista de publicaciones</p>
	<p>'.$mensaje.'</p>
	<section id="lista">';
	$imagen = new Imagen();
	$user = new Usuario();
	$post = new Post();
	$allposts = array_reverse($post->getAll());
	$i = 0;
	$max = sizeof($allposts);
	if($allposts == false){
	echo '<article>
	<p style="text-align:center;">Aún no hay publicaciones creadas</p>
	</article>';
	}
	else{
		while($i < $max){
	$user->setId($allposts[$i]['autor']);
	$username = $user->getUser();
	$imagen->setId($allposts[$i]['img']);
	$imagenurl = $imagen->getUrl();
	echo '<article>
			<h2>'.$allposts[$i]['titulo'].'</h2>
			<img class="imgcenter" src="'.$imagenurl.'">
			<h3>Contenido: </h3>
			<p>'.$allposts[$i]['contenido'].'</p>
			<h3>Autor: <span class="campo">'.$username.'</span></h3>
			<h3>Tags: <span class="campo">'.$allposts[$i]['tags'].'</span></h3>
			<h3>Fecha: <span class="campo">'.$allposts[$i]['fecha'].'</span></h3>
			<ul>
				<li>
					<form method="post">
					<input type="hidden" name="id" value="'.$allposts[$i]['id'].'">
					<input name="editar" class="azul" value="Editar" type="submit">
					</form>
				</li>
				<li>
					<form method="post">
					<input type="hidden" name="id" value="'.$allposts[$i]['id'].'">
					<input name="eliminar" class="rojo" value="Eliminar" type="submit">
					</form>
				</li>
			</ul>
		</article>';
	$i++;
}
	}
	
echo '</section>';

}
?>
