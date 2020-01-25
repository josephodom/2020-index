<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" type="text/css" href="<?=urlBase()?>css/frontend.min.css">
<script type="text/javascript" src="<?=urlBase()?>js/scrolled.js"></script>
<script type="text/javascript" src="<?=urlBase()?>js/graph.js"></script>
<base href="<?=urlBase()?>">
<title>Joseph Odom &bull; Web Developer</title>
</head>

<body>

<header id="header">
	<div class="container">
		<h1>
			Joseph Odom
		</h1>
		
		<h2>
			Web Developer
		</h2>
		
		<p class="large">
			Professional web developer since 2015
		</p>
	</div><!-- .container -->
</header>

<main id="main">
	<?=view('main/experience')?>
	
	<?=view('main/sites', [
		'sites' => $sites,
	])?>
</main>

<footer id="footer">
	<div class="container">
		&copy; Joseph Odom <?=date('Y')?>
	</div><!-- .container -->
</footer>

</body>
</html>