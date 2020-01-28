<section class="py-5">
	<div class="container">
		<h3>Experience</h3>
		
		<p>
			I&rsquo;ve been working as a web developer since October 2015. In that time, I&rsquo;ve worked with
			PHP, MySQL, HTML5, CSS3, JavaScript, jQuery, Boostrap, Laravel, and more.
		</p>
		
		<section id="icons-container">
			<input type="checkbox" id="icons-hide-checkbox">
			
			<ul id="icons" class="row"><?php foreach($icons as $icon => $description): ?>
				<li class="col-6 col-lg-4">
					<span class="fab fa-<?=$icon?>"></span>
					
					<h4><?=$description?></h4>
				</li>
			<?php endforeach; ?></ul><!-- .icons -->
			
			<label id="icons-show-hide-label" for="icons-hide-checkbox">
				<div id="icons-show-hide-label-down">
					Show All
					<span class="fas fa-caret-down"></span>
				</div>
				
				<div id="icons-show-hide-label-up">
					Collapse
					<span class="fas fa-caret-up"></span>
				</div>
			</label>
		</section><!-- #icons-container -->
	</div><!-- .container -->
</section>