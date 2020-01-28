<section class="py-5">
	<div class="container">
		<h3>Work Examples</h3>
		
		<p>
			Here are some examples of code I&rsquo;ve written:
		</p>
		
		<div class="row"><?php foreach($examples as $key => $site): ?>
			<div class="col-12 col-lg-4 mb-4">
				<div class="card">
					<div class="card-image">
						<a href="<?=$site['href']?>" target="_blank">
							<img src="<?=urlBase()?>images/projects/<?=$key?>.png" alt="">
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