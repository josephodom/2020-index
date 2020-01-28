<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" type="text/css" href="<?=urlBase()?>css/frontend.min.css">
<script type="text/javascript" src="<?=urlBase()?>js/scrolled.js"></script>
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
	<?=view('main/experience', [
		'icons' => $icons,
	])?>
	
	<?=view('main/callout-ends')?>
	
	<?=view('main/examples', [
		'examples' => $examples,
	])?>
	
	<?=view('main/callout-contact')?>
	
	<?=view('main/sites', [
		'sites' => $sites,
	])?>
</main>

<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 mb-4">
				<h3>Contact</h3>
				
				<ul class="list-inline">
					<li>
						<a href="mailto:ejosephodom@gmail.com">
							<span class="fas fa-envelope"></span>
							Email
						</a>
					</li>
					
					<li>
						<a href="https://www.linkedin.com/in/ejosephodom/" target="_blank">
							<span class="fab fa-linkedin"></span>
							LinkedIn
						</a>
					</li>
					
					<li>
						<a href="mailto:ejosephodom@gmail.com">
							<span class="fab fa-github"></span>
							GitHub
						</a>
					</li>
				</ul>
			</div><!-- .col -->
			
			<div class="col-12 col-lg-6 mb-4">
				<h3>Examples</h3>
				
				<ul class="list-inline"><?php foreach($examples as $example): ?>
					<li>
						<a href="<?=$example['href']?>" target="_blank">
							<?=$example['title']?>
						</a>
					</li>
				<?php endforeach; ?></ul>
			</div><!-- .col -->
		</div><!-- .row -->
		
		<section>
			&copy; Joseph Odom <?=date('Y')?>
		</section>
	</div><!-- .container -->
</footer>

</body>
</html>