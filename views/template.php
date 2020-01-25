<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=urlBase()?>node_modules/foundation-sites/dist/css/foundation.min.css">
<link rel="stylesheet" type="text/css" href="<?=urlBase()?>node_modules/foundation-sites/dist/css/foundation-float.min.css">
<link rel="stylesheet" type="text/css" href="<?=urlBase()?>node_modules/foundation-sites/dist/css/foundation-prototype.min.css">
<link rel="stylesheet" type="text/css" href="<?=urlBase()?>css/frontend.min.css">
<script type="text/javascript" src="<?=urlBase()?>js/scrolled.js"></script>
<base href="<?=urlBase()?>">
<title>Joseph Odom &bull; Web Developer</title>
</head>

<body>

<header id="header">
	<div class="grid-container">
		<h1>
			Joseph Odom
		</h1>
		
		<h2>
			Web Developer
		</h2>
		
		<p class="large">
			Professional web developer since 2015
		</p>
	</div><!-- .grid-container -->
</header>

<main id="main">
	<?=view('main-sites', [
		'sites' => $sites,
	])?>
</main>

<footer id="footer">
	<div class="grid-container">
		&copy; Joseph Odom <?=date('Y')?>
	</div><!-- .grid-container -->
</footer>

</body>
</html>