<!DOCTYPE html>
<html lang="en">

<?= $this->include('includes/user/head2.php'); ?>

<body class="body-wrapper">


	<?= $this->include('includes/user/header2.php'); ?>

	<section class="blog single-blog section">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
					<article class="single-post">
						<h3>About <?= $appdet['appname'] ?></h3>
						<ul class="list-inline">
							<li class="list-inline-item">by <a href=""><?= $appdet['appname'] ?></a></li>
							<li class="list-inline-item">Apr 22, 2023</li>
						</ul>
						<img src="<?= $base . 'public/images/ju/IMG-20230415-WA0026.jpg' ?>" alt="article-01">
						<p><?= ucfirst($appdet['aboutus']); ?></p>
						<ul class="social-circle-icons list-inline">
							<li class="list-inline-item text-center"><a class="fa fa-facebook" href="<?= $appdet['facebook'] ?>"></a></li>
							<li class="list-inline-item text-center"><a class="fa fa-twitter" href="<?= $appdet['twitter'] ?>"></a></li>
							<li class="list-inline-item text-center"><a class="fa fa-google-plus" href="<?= $appdet['email'] ?>"></a></li>
							<li class="list-inline-item text-center"><a class="fa fa-pinterest-p" href="<?= $appdet['pintrest'] ?>"></a></li>
							<li class="list-inline-item text-center"><a class="fa fa-linkedin" href="<?= $appdet['linkedin'] ?>"></a></li>
						</ul>
					</article>

				</div>
				<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
					<div class="sidebar">
						<!-- Search Widget -->
						<div class="widget search p-0">
							<div class="input-group">
								<input type="text" class="form-control" id="expire" placeholder="Search...">
								<span class="input-group-addon"><i class="fa fa-search"></i></span>
							</div>
						</div>
						<!-- Category Widget -->

						<?= $this->include('includes/user/allcat.php'); ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?= $this->include('includes/user/trending.php'); ?>
	<?= $this->include('includes/user/footer.php'); ?>


	<?= $this->include('includes/user/foot.php'); ?>


</body>

</html>