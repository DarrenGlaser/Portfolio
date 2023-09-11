<?php

    $detect = perch_layout_var('detect', true);
    $deviceType = perch_layout_var('deviceType', true);

    $cpMtl = perch_layout_var('cpMtl', true);
    $cpDvc = perch_layout_var('cpDvc', true);
    $cpFmt = perch_layout_var('cpFmt', true);

    PerchSystem::set_var('detect', $detect);
    PerchSystem::set_var('deviceType', $deviceType);
    PerchSystem::set_var('cpMtl', $cpMtl);
    PerchSystem::set_var('cpDvc', $cpDvc);
    PerchSystem::set_var('cpFmt', $cpFmt);

?>

<section id="work" class="section bg-dark-1 mt-5">
    <div class="container">

        <div class="position-relative d-flex text-center mb-5">
            <h2 class="text-24 text-muted opacity-1 text-uppercase fw-600 w-100 mb-0">My Work</h2>
            <p class="text-9 text-white fw-600 position-absolute w-100 align-self-center lh-base mb-0"><?php perch_get('cpMtl') ?><span class="heading-separator-line border-bottom border-3 border-primary d-block mx-auto"></span> </p>
        </div>

        <div class="row mb-5">
            <div class="adcontent col-sm-12 col-lg-12">

                <?php
                if ( $detect->isMobile() ) {

                    //echo 'Mobile';
                    if ( $cpDvc === 'Desktop' ) {
                        echo '<h2 class="center text-center">Whoops!</h2><p class="center text-center">This ad won\'t work on your phone. It\'s a desktop format.</p>';
                    } else {

                        perch_shop_product(perch_get('s'), [
                            'template'		=> 'products/product-details.html',
                            'variants' 		=> true,
                            'filter' => [
                                [
                                    'filter' => 'cpDvc',
                                    'match'  => 'in',
                                    'value'  => 'Mobile,Both',
                                ],
                            ],
                        ]);
                    }

                } else {

                    //echo 'Desktop';
                    perch_shop_product(perch_get('s'), [
                        'template'		=> 'products/product-details.html',
                        'variants' 		=> true,
                        'filter' => [
                            [
                                'filter' => 'cpDvc',
                                'match'  => 'in',
                                'value'  => 'Desktop,Both',
                            ],
                        ],
                    ]);
                }
                ?>

            </div>
        </div>

    </div>
</section>
