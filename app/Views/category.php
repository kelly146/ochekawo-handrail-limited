<!DOCTYPE html>
<html lang="en">

<?= $this->include('includes/user/head2.php'); ?>

<body class="body-wrapper">


	<?= $this->include('includes/user/header2.php'); ?>
	<?php if (count($prodbycat) > 0) {; ?>

		<?= $this->include('includes/user/search.php'); ?>
		<section class="section-sm">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="search-result bg-gray">

							<h2>Results For "<?php echo $prodbycat[0]['category_name']; ?>"</h2>
							<p><?=$cat_id!=0?$count:'' ?> Results on <?php echo (new DateTime())->format('l, jS F Y') ?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">

						<?= $this->include('includes/user/allcat.php'); ?>
					</div>
					<div class="col-md-9">
						<div class="category-search-filter">
							<div class="row">
								<div class="col-md-6">
									<strong>Short</strong>

								</div>
								<div class="col-md-6">
									<div class="view">
										<strong>Views</strong>
										<ul class="list-inline view-switcher">
											<li class="list-inline-item">
												<a href="javascript:void(0);"><i class="fa fa-th-large"></i></a>
											</li>
											<li class="list-inline-item">
												<a href="javascript:void(0);"><i class="fa fa-reorder"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="product-grid-list">
							<div class="row mt-30">

								<?php
								for ($i = 0; $i < count($prodbycat); $i++) {
									echo "
                <div class='col-sm-12 col-lg-4 col-md-6'>
                        <div class='product-item bg-light'>
                            <div class='card'>
                                <div class='thumb-content'>
                                    <!-- <div class='price'>$200</div> -->
                                    <a href='{$base}products/{$prodbycat[$i]['product_id']}'>
                                        <img class='card-img-top img-fluid' src='{$base}public/images/ju/{$prodbycat[$i]['product_image']}' style='height:262px;' alt='Card image cap'>
                                    </a>
                                </div>
                                <div class='card-body'>
                                    <h4 class='card-title'><a href='{$base}products/{$prodbycat[$i]['product_id']}'>{$prodbycat[$i]['product_name']}</a></h4>
                                    <ul class='list-inline product-meta'>
                                        <li class='list-inline-item'>
                                            <a href='{$base}products/{$prodbycat[$i]['product_id']}'><i class='fa fa-folder-open-o'></i>{$prodbycat[$i]['category_name']}</a>
                                        </li>
                                        <li class='list-inline-item'>
                                            <a href='{$base}products/{$prodbycat[$i]['product_id']}'><i class='fa fa-calendar'></i>2" . (new DateTime('2023-04-24 05:41:26'))->format('l, jS F Y') . "</a>
                                        </li>
                                    </ul>
                                    <p class='card-text'>{$prodbycat[$i]['product_description']}</p>
                                    <div class='product-ratings'>
                                        <ul class='list-inline'>
                                            <li class='list-inline-item selected'><i class='fa fa-star'></i></li>
                                            <li class='list-inline-item selected'><i class='fa fa-star'></i></li>
                                            <li class='list-inline-item selected'><i class='fa fa-star'></i></li>
                                            <li class='list-inline-item selected'><i class='fa fa-star'></i></li>
                                            <li class='list-inline-item selected'><i class='fa fa-star'></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                ";
								}
								?>
							</div>
						</div>
						<div class="pagination justify-content-center">
							<nav aria-label="Page navigation example">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link" href="#" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
											<span class="sr-only">Previous</span>
										</a>
									</li>
									<?php
									$lic = floor($count / $limit);
									for ($i = 1; $i <= $lic; $i++) {
									?>
										<li class="page-item"><a class="page-link" href="#"><?php echo $i; ?></a></li>
									<?php
									}
									?>
									<li class="page-item">
										<a class="page-link" href="#" aria-label="Next">
											<span aria-hidden="true">&raquo;</span>
											<span class="sr-only">Next</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php } else {
		echo "<H1>ITEM NOT FOUND</H1>";
	} ?>

	<?= $this->include('includes/user/footer.php'); ?>


	<?= $this->include('includes/user/foot.php'); ?>

</body>

</html>