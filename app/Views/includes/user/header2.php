<section >
	<div class="container p-0">
		<div class="row p-0">
			<div class="col-md-12 p-0">
				<nav class="navbar navbar-expand-lg  navigation p-0">
					<a class="navbar-brand" href="<?= $base ?>">
						<img src="<?= $base ?>public/images/logo.png" style="max-height:110px; filter:invert(1)" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="<?= $base ?>">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?= $base ?>aboutus">About Us</a>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Services <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu dropdown-menu-right">
									<?php
									for ($i = 0; $i < count($allcat); $i++) {
										echo "<a class='dropdown-item' href='{$base}category/{$allcat[$i]['category_id']}'>{$allcat[$i]['category_name']}</a>";
									}
									?>
								</div>
							</li>

							<li class="nav-item">
								<a class="nav-link" href="<?= $base ?>contactus">Contact Us</a>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">

							<li class="nav-item">
								<a class="nav-link add-button" href="<?= $base ?>category/0"><i class="fa fa-eye"></i> View Store</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>