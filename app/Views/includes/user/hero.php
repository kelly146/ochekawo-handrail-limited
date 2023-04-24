<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Buy From the Best </h1>
					<p>Join the millions who buy from Ochekawa <br> everyday in local communities around the world</p>
					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
						<ul class="list-inline">
							<?php
							for ($i = 0; $i < count($allcat); $i++) {
								echo "<li class='list-inline-item'><a href='<?= base_url() ?>category/{$allcat[$i]['category_id']}'><i class='fa fa-home'></i> {$allcat[$i]['category_name']}</a></li>";
							}
							?>

						</ul>
					</div>

				</div>
				<!-- Advance Search -->
				<div class="advance-search">
					<form action="#">
						<div class="row">
							<!-- Store Search -->
							
							<div class="col-12">
								<div class="block d-flex">
									<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="search" placeholder="Search for store">
									<!-- Search Button -->
									<button class="btn btn-main">SEARCH</button>
								</div>
							</div>
						</div>
					</form>

				</div>

			</div>
		</div>
	</div>
	<!-- Container End -->
</section>