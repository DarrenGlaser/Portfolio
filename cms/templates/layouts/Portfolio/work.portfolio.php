<?php

$detect = perch_layout_var('detect', true);
$deviceType = perch_layout_var('deviceType', true);
PerchSystem::set_var('detect', $detect);
PerchSystem::set_var('deviceType', $deviceType);

?>
<!-- Portfolio ============================================= -->
<section id="work" class="section bg-dark-1 mt-5">
    <div class="container padt30">

        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
            <h2 class="text-24 text-white-50 opacity-1 text-uppercase fw-600 w-100 mb-0">Portfolio</h2>
            <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0">My Work<span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->

        <!-- Filter Menu -->
        <div class="filters-container">

            <div class="media-boxes-search">
                <span class="media-boxes-icon fa fa-search"></span>
                <input type="text" id="search" placeholder="Search by title">
                <span class="media-boxes-clear fa fa-close"></span>
            </div>

            <div class="media-boxes-drop-down" id="sort">
                <div class="media-boxes-drop-down-header">
                </div>
                <ul class="media-boxes-drop-down-menu">
                    <li><a href="#" data-sort-by="original-order" class="selected">Original Order</a></li>
                    <li><a href="#" data-sort-by="title" data-sort-toggle="true">Sort by Title</a></li>
                    <li><a href="#" data-sort-by="year" data-sort-toggle="true">Sort by Year</a></li>
                    <li><a href="#" data-sort-by="author" data-sort-toggle="true">Sort by Author</a></li>
                </ul>
            </div>

            <?php
            /*
            perch_categories([
                'set'           => 'workformat',
                'template'      => 'mediaboxes_format.html',
            ]);
            */

            perch_categories([
                'set'           => 'workcontent',
                'template'      => 'mediaboxes_content.html',
            ]);

            perch_categories([
                'set'           => 'worksectors',
                'template'      => 'mediaboxes_sectors.html',
            ]);
            ?>

        </div>
        <!-- Filter Menu end -->



        <!--MEDIABOXES-->
        <div class="row" style="z-index: 1;">
            <div class="col-12 pad0 pb-5">


                <div id="grid">
                    <?php
                    perch_shop_products(array(
                        'template'			=> 'products/work_home.html',
                        //'category-match'	=> 'any',
                        //'paginate'			=> false,
                        //'variants' 			=> false,
                        //'filter'			=> 'status',//The ID of a field to filter the results by.
                        //'match'				=> 'eq',//Used with filter, see the below table for values
                        //'value'				=> 1,//Used with filter and match. The value to match.
                        //'sort'				=> 'title',//price, title, sku
                        //'sort-order'		=> 'RAND',//ASC (ascending), DESC (descending) or RAND (random)
                        'count'				=> 16,
                    ));

                    if ( $detect->isMobile() ) {
                        //Mobile Device
                        perch_collection('Work', [
                            'template'  => 'collections/work.html',
                            'filter' => [
                                [
                                    'filter' => 'cponoff',
                                    'match'  => 'eq',
                                    'value'  => 'on',
                                ],
                                [
                                    'filter' => 'cpDvc',
                                    'match'  => 'in',
                                    'value'  => 'Mobile,Both',
                                ],
                            ],
                            'sort'      => 'cpDat',
                            'sort-order'=> 'DESC',
                            'count'     => 600,
                        ]);

                    } else {
                        //Desktop Device
                        perch_collection('Work', [
                            'template'  => 'collections/work.html',
                            'filter' => [
                                [
                                    'filter' => 'cponoff',
                                    'match'  => 'eq',
                                    'value'  => 'on',
                                ],
                                [
                                    'filter' => 'cpDvc',
                                    'match'  => 'in',
                                    'value'  => 'Desktop,Both',
                                ],
                            ],
                            'sort'      => 'cpDat',
                            'sort-order'=> 'DESC',
                            'count'     => 600,
                        ]);

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
