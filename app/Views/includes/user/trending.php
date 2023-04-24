<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Trending Products</h2>
                    <p>Products that are looked up more frequently.</p>
                </div>  
            </div>
        </div>
        <div class="row">
            <?php
            for ($i = 0; $i < count($allprod); $i++) {
                echo "
                <div class='col-sm-12 col-lg-4'>
                        <div class='product-item bg-light'>
                            <div class='card'>
                                <div class='thumb-content'>
                                    <!-- <div class='price'>$200</div> -->
                                    <a href='{$base}products/{$allprod[$i]['product_id']}'>
                                        <img class='card-img-top img-fluid' src='{$base}public/images/ju/{$allprod[$i]['product_image']}' style='height:262px;' alt='Card image cap'>
                                    </a>
                                </div>
                                <div class='card-body'>
                                    <h4 class='card-title'><a href='{$base}products/{$allprod[$i]['product_id']}'>{$allprod[$i]['product_name']}</a></h4>
                                    <ul class='list-inline product-meta'>
                                        <li class='list-inline-item'>
                                            <a href='{$base}products/{$allprod[$i]['product_id']}'><i class='fa fa-folder-open-o'></i>{$allprod[$i]['category_name']}</a>
                                        </li>
                                        <li class='list-inline-item'>
                                            <a href='{$base}products/{$allprod[$i]['product_id']}'><i class='fa fa-calendar'></i>2".(new DateTime('2023-04-24 05:41:26'))->format('l, jS F Y')."</a>
                                        </li>
                                    </ul>
                                    <p class='card-text'>{$allprod[$i]['product_description']}</p>
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
</section>