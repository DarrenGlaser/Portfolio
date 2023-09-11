<?php

    $detect = perch_layout_var('detect', true);
    $deviceType = perch_layout_var('deviceType', true);

    PerchSystem::set_var('detect', $detect);
    PerchSystem::set_var('deviceType', $deviceType);

?>
<!-- Portfolio ============================================= -->
<section id="portfolio" class="section bg-dark-2">
    <div class="container padt30">

        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
            <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Portfolio</h2>
            <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">My Work<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->

        <div class="row" style="z-index: 1;">
            <div class="col-12 pad0 pb-5">

                <!--MEDIABOXES-->
                <div id="grid">
                    <?php

                    if ( $detect->isMobile() ) {
                        //Mobile Device
                        perch_shop_products(array(
                            'template'			=> 'products/work_home.html',
                            'category-match'	=> 'any',
                            'paginate'			=> false,
                            'variants' 			=> false,
                            'filter' => [
                                [
                                    'filter' => 'cpShow',
                                    'match'  => 'eq',
                                    'value'  => 'Yes',
                                ],
                                /*
                                [
                                    'filter' => 'cpDvc',
                                    'match'  => 'in',
                                    'value'  => 'Desktop,Both',
                                ],
                                */
                            ],
                            //'sort'				=> 'title',//price, title, sku
                            //'sort-order'		=> 'RAND',//ASC (ascending), DESC (descending) or RAND (random)
                            'count'				=> 16,
                        ));

                    } else {
                        //Desktop Device
                        perch_shop_products(array(
                            'template'			=> 'products/work_home.html',
                            'category-match'	=> 'any',
                            'paginate'		    => false,
                            'variants' 		    => false,
                            'filter' => [
                                [
                                    'filter' => 'cpShow',
                                    'match'  => 'eq',
                                    'value'  => 'Yes',
                                ],
                                /*
                                [
                                    'filter' => 'cpDvc',
                                    'match'  => 'in',
                                    'value'  => 'Desktop,Both',
                                ],
                                */
                            ],
                            //'sort'			=> 'title',//price, title, sku
                            //'sort-order'		=> 'RAND',//ASC (ascending), DESC (descending) or RAND (random)
                         'count'				=> 16,
                        ));
                    }


                    ?>
                </div>
                <!--//END MEDIABOXES-->

            </div>
        </div>
        <!--//END MEDIABOXES-->

    </div>
</section>
<!-- Portfolio end -->
