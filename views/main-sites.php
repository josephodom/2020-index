<section class="py-5">
	<div class="container">
		<h3>Websites I&rsquo;ve Made</h3>
		
		<p>
			As a full stack WordPress developer, I&rsquo;ve turned PSD designs into modern,
			responsive websites with custom post types, taxonomies, widgets, and other
			functionality.
		</p>
		
		<div class="row"><?php foreach($sites as $key => $site): ?>
			<div class="col-12 col-lg-4">
				<div class="card">
					<div class="card-image">
						<a href="<?=$site['href']?>" target="_blank">
							<img src="<?=urlBase()?>images/sites/<?=$key?>.png" alt="">
						</a>
					</div><!-- .card-image -->
					
					<div class="card-body">
						<h4>
							<a href="<?=$site['href']?>" target="_blank">
								<?=$site['title']?>
							</a>
						</h4>
						
						<p>
							<?=$site['description']?>
						</p>
					</div>
				</div><!-- .card -->
			</div><!-- .column -->
		<?php endforeach; ?></div><!-- .row -->
	</div><!-- .grid-container -->
</section>