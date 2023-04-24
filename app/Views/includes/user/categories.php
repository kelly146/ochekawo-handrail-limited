<section class=" section">

	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>All Categories</h2>
					<p>Products key categories</p>
				</div>
				<div class="row">
					<?php
					// print_r($detcat);

					for ($i = 0; $i < count($detcat); $i++) {
						$string = preg_replace('/\},\s*\{/', ',', $detcat[$i]['top_5_products']);
						$string = str_replace('/', '\/', $string);
						$js = json_decode($string, true);
					?>
					<div class="col-lg-3 offset-lg-0 col-md-6 offset-md-1 col-sm-12 col-12">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-laptop icon-bg-1"></i>
								<a href="<?=$base.'category/'.$detcat[$i]['category_id']?>">	<h4><?= $detcat[$i]['category_name']?></a></h4>
							</div>
							
					
						<?php if(trim($string)!=''){$cp=count($js); for ($j = 0; $j < count($js) && $j<5; $j++) { ?>
							<ul class="category-list">
								<li><a href="<?=$base.'products/'.$js[$j]['id']?>"><?= $js[$j]['name']?> <span><?= $cp ?>	</span></a></li>
							</ul>
						<?php }} ?>
						</div>
					</div>
					<?php } ?>
					<!-- Category list -->
					<!-- /Category List -->


				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>