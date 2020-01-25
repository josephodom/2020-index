<section class="padding-vertical-3">
	<div class="grid-container">
		<h3>Websites I&rsquo;ve Made</h3>
		
		<p>
			As a full stack WordPress developer, I&rsquo;ve turned PSD designs into modern,
			responsive websites with custom post types, taxonomies, widgets, and other
			functionality.
		</p>
		
		<div class="row"><?php foreach($sites as $key => $site): ?>
			<div class="column large-4">
				<div class="card">
					<div class="card-image">
						<img src="<?=urlBase()?>images/sites/<?=$key?>.png" alt="">
					</div><!-- .card-image -->
					
					<div class="card-section">
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