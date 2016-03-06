<section id="posts">
<?php
require_once 'classes/posts.php';
require_once 'classes/imagenes.php';
$post = new Post();
$allposts = $post->getAll();

foreach ($allposts as $value) {
	$imagen = new Imagen();
	$imagen->setId($value['img']);
	echo'<article>
		<a href="'.$conf->getCfg("url").'post/'.$value['id'].'">
		<h1>'.$value['titulo'].'</h1>
		<img src="'.$imagen->getUrl().'">
		</a>
		<p>'.$value['contenido'].'</p>
	</article>';
}
?>
</section>