<!DOCTYPE html>
<html>
<head>
<?php include('head.php'); ?>
</head>
<body>
<?php include('nav.php'); ?>
<?php include('banner.php'); ?>
<?php include('postlist.php'); ?>
<?php include('footer.php'); ?>
</body>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script>
$(document).ready(function(){
	$('#posts').masonry({
  		itemSelector: 'article'
	});
	if($('body').width() < 800){
		$('#posts article').attr("style","");
	}
});

</script>
</html>
