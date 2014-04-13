<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Responsive website from scratch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="../from_scratch/css/website-theme.css">
</head>
<body>

	<div class="container">
		<?php include_once 'header.inc.php'; ?>
		<main>

			<?php //include_once 'frontpage-slideshow.inc.php'; ?>
			<?php include_once 'frontpage-marketing.inc.php'; ?>
			<?php include_once 'frontpage-features.inc.php'; ?>
			<?php include_once 'frontpage-clients.inc.php'; ?>

		</main>
		<?php include_once 'footer.inc.php'; ?>
	</div>














	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/foundation.js"></script>
	<script>

	var slideshowLoaded = false;

	$(document).ready(function(){
		// Check if the media query is activated
		if ( !slideshowLoaded && matchMedia(Foundation.media_queries['medium']).matches ){
		  // Load the content for slideshow.
		  $.ajax({
		  	url: 'index.php?getPage=frontpage-slideshow',
		  	beforeSend: function(){
		  		console.log('Loading slideshow html');
		  	},
		  	success: function(r){
		  		$('main').prepend(r);
		  		slideshowLoaded = true;
		  	}
		  });
		};
	});
	</script>

</body>
</html>