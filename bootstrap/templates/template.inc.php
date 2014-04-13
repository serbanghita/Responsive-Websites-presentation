<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Responsive website from scratch</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="../from_scratch/css/website-theme.css">
</head>
<body>

	<div class="container">
		<?php include_once 'header.inc.php'; ?>
		<main>

			<?php include_once 'frontpage-slideshow.inc.php'; ?>
			<?php include_once 'frontpage-marketing.inc.php'; ?>
			<?php include_once 'frontpage-features.inc.php'; ?>
			<?php include_once 'frontpage-clients.inc.php'; ?>

		</main>
		<?php include_once 'footer.inc.php'; ?>
	</div>

</body>
</html>