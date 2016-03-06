<?php
require_once 'classes/config.php';
require_once 'classes/posts.php';
require_once 'classes/imagenes.php';
require_once 'classes/usuarios.php';
$conf = new Config();
$post = new Post();
$imagen = new Imagen();
$user = new Usuario();
if(isset($_GET['id'])){
	$postid = $_GET['id'];
}
else{
	header("location: ".$conf->getCfg("url"));
}
if($post->setId($postid) != true){
	header("location: ".$conf->getCfg("url"));
}
$imagen->setId($post->getImagen());
$user->setId($post->getAutor());

list($anio,$mes,$dia)=explode("-",$post->getFecha());
$fecha =  $dia."-".$mes."-".$anio; 
?>
<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
</head>
<body>
<?php include('nav.php'); ?>
<section id="page">
	<div id="image" style="background-image: url('<?php echo $imagen->getUrl(); ?>')">
		<img src="images/fix.png">
	</div>
	<h1><?php echo $post->getTitulo(); ?></h1>
	<article>
		<?php echo $post->getContenido(); ?>
	</article>
	<article>
		<p>Publicado por: <?php echo $user->getNombre()." ".$user->getApellido()." el ".$fecha; ?></p>
	</article>
</section>
<?php include('footer.php'); ?>
</body>
</html>
