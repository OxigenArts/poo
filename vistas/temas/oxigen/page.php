<?php
require_once 'classes/config.php';
require_once 'classes/paginas.php';
$conf = new Config();
$pag = new Pagina();
if(isset($_GET['id'])){
	$pageid = $_GET['id'];
}
else{
	header("location: ".$conf->getCfg("url"));
}
if($pag->setId($pageid) != true){
	header("location: ".$conf->getCfg("url"));
}
?>
<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
</head>
<body>
<?php include('nav.php'); ?>
<section id="page">
	<h1><?php echo $pag->getTitulo(); ?></h1>
	<article>
		<?php echo $pag->getContenido(); ?>
	</article>
</section>
<?php include('footer.php'); ?>
</body>
</html>
