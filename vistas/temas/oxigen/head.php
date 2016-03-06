<?php
require_once 'classes/config.php';
$conf = new Config();
$titulo = $conf->getCfg("titulo");
$nombre = $conf->getCfg("nombre");
?>
<title><?php echo $nombre." - ".$titulo; ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<base href="<?php echo $conf->getCfg("url"); ?>vistas/temas/oxigen/"></base>
<link rel="stylesheet" href="css/style.css">
