<?php
require_once 'classes/usuarios.php';
require_once 'classes/imagenes.php';
require_once 'classes/sesiones.php';
require_once 'classes/temas.php';
$sesion = new Sesion();
$tema = new Tema();

?>
<section id="header" class="skel-layers-fixed">
	<header>
		<?php
		if($sesion->Verificar() == true){
			$user = new Usuario();
			$imagen = new Imagen();
			$user->setId($sesion->getId());
			$imagen->setId($user->getImagen());
			$tipo = "Usuario";
			if($user->getPrivilegio() == "1"){
				$tipo = "Administrador";
			}
			echo '<span class="image avatar">
					<div id="imgcont" style="background-image: url('."'".$imagen->getUrl()."')".'"> </div>
				</span>
				<h1 id="logo">
					<a href="">'.$user->getNombre()." ".$user->getApellido().'</a>
				</h1>
				<p>'.$tipo.'<br />'.$user->getUser().'</p>';
		}
		else{
			echo 'form aqui';
		}

		?>
		
	</header>
	<nav id="nav">
		<ul>
			<li><a href="#one" class="active"><?php print $tema->getCfg("page_about"); ?></a></li>
			<li><a href="#three"><?php print $tema->getCfg("page_news"); ?></a></li>
			<li><a href="#four"><?php print $tema->getCfg("page_contact"); ?></a></li>
		</ul>
	</nav>
	<footer>
		<ul class="icons">
			<li><a href="" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
			<li><a href="" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
			<li><a href="" class="icon fa-github"><span class="label">Github</span></a></li>
			<li><a href="" class="icon fa-envelope"><span class="label">Email</span></a></li>
		</ul>
	</footer>
</section>