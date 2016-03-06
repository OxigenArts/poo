<?php
require_once 'classes/config.php';
$conf = new Config();
$titulo = $conf->getCfg("titulo");
$descripcion = $conf->getCfg("descripcion");
?>
<section id="logo" >
	<img src="images/logo.svg" onerror="this.src='images/logo.png'">
</section>
<section id="text" >
	<h1><?php echo $titulo; ?></h1>
	<p><?php echo $descripcion; ?></p>
</section>