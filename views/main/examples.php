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
						<a href="./<?=$key?>/" target="_blank">
							<img src="<?=urlBase()?>images/projects/<?=$key?>.png" alt="">
						</a>
					</div><!-- .card-image -->
					
					<div class="card-body">
						<h4>
							<a href="./<?=$key?>/" target="_blank">
								<?=$site['title']?>
							</a>
						</h4>
						
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="./<?=$key?>/" target="_blank">
									<span class="fas fa-link"></span>
								</a>
							</li>
							
							<li class="list-inline-item">
								<a href="https://github.com/josephodom/<?=$site['github'] ?? $key?>/" target="_blank">
									<span class="fab fa-github"></span>
								</a>
							</li>
						</ul>
						
						<p>
							<?=$site['description']?>
						</p>
					</div>
				</div><!-- .card -->
			</div><!-- .column -->
		<?php endforeach; ?></div><!-- .row -->
	</div><!-- .grid-container -->
</section>