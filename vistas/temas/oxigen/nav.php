<?php
require_once 'classes/paginas.php';
$pagina = new Pagina();
$allpages = $pagina->getAll();
?>
<header>
	<ul>
		<?php 
		if(isset($_GET['id']) && !isset($post)){
			echo '<a href="'.$conf->getCfg("url").'"><li>Inicio</li></a>';
		}
		else{
			echo '<a href="'.$conf->getCfg("url").'"><li class="active">Inicio</li></a>';
		}
		foreach ($allpages as $value) {
			if(@$_GET['id'] == $value['id'] && !isset($post)){
				echo' - <a href="'.$conf->getCfg("url").'page/'.$value['id'].'"><li class="active">'.$value['titulo'].'</li></a>';
			}
			else{
				echo' - <a href="'.$conf->getCfg("url").'page/'.$value['id'].'"><li>'.$value['titulo'].'</li></a>';
			}
		}
		?>
	</ul>
</header>