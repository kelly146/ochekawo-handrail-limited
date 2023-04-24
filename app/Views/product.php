<!DOCTYPE html>
<html lang="en">

<?= $this->include('includes/user/head2.php'); ?>

<body class="body-wrapper">

	<?= $this->include('includes/user/header2.php'); ?>

	<?= $this->include('includes/user/search.php'); ?>

	<section class="section bg-gray">
		<?php if (count($prodbyid) > 0) { ?>
			<!-- Container Start -->
			<div class="container">
				<div class="row">
					<!-- Left sidebar -->
					<div class="col-md-8">
						<div class="product-details">
							<h1 class="product-title"><?= $prodbyid[0]['product_name']?></h1>
							<div class="product-meta">
								<ul class="list-inline">
									<li class="list-inline-item"><i class="fa fa-user-o"></i> By <a href=""><?= $appdet['appname']?></a></li>
									<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Category<a href=""><?= $prodbyid[0]['category_name']?></li>
									<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Location<a href=""><?= ucfirst($appdet['country'])?></a></li>
								</ul>
							</div>
							<div id="carouselExampleIndicators" class="product-slider carousel slide" data-ride="carousel">
							
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="<?= $base.'public/images/ju/'.$prodbyid[0]['product_image']?>" alt="First slide">
									</div>
								
								</div>
							
							</div>
							<div class="content">
								
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
										<h3 class="tab-title">Product Description</h3>
										<p><?=  $prodbyid[0]['product_description']?></p>

									
									</div>
								
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="sidebar">
							<div class="widget price text-center">
								<h4>Price</h4>
								<p><?= $appdet['currency'].$prodbyid[0]['product_price']?></p>
							</div>
							<!-- User Profile widget -->
							<div class="widget user">
								<img class="img-fluid" src="<?= $base ?>public/images/logo.png" style="filter:invert(1)" alt="">
								<h4><a href=""><a href=""><?= $appdet['appname']?></a></h4>
								<p class="member-time"><?php echo (new DateTime())->format('l, jS F Y') ?></p>
								<a href="">See all ads</a>
								<ul class="list-inline mt-20">
									<li class="list-inline-item"><a href="" class="btn btn-contact">Contact</a></li>
									<li class="list-inline-item"><a href="" class="btn btn-offer">Make an offer</a></li>
								</ul>
							</div>
						
							<div class="widget coupon text-center">
								<!-- Coupon description -->
								<p> Share This product with
									your fellow users.
								</p>
								<!-- Submii button -->
								<a href="<?= $base?>" class="btn btn-transparent-white">Shear URL</a>
							</div>

						</div>
					</div>

				</div>
			</div>
			<!-- Container End -->
		<?php } else {
			echo "<H1>ITEM NOT FOUND</H1>";
		} ?>
	</section>

	<?= $this->include('includes/user/trending.php'); ?>

	<?= $this->include('includes/user/footer.php'); ?>
	<?= $this->include('includes/user/foot.php'); ?>

</body>

</html>